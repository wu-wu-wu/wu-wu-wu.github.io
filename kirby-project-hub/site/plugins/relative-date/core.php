<?php

/**
 *
 */

class RelativeDate {

  protected $raw         = null;
  protected $date        = null;
  protected $now         = null;
  protected $difference  = null;

  protected $length      = 7;
  protected $language    = array();

  protected $isFuzzy      = false;
  protected $phrasesKeys  = array();

  public function __construct($date, $args) {
    $this->raw          = $date;
    $this->date         = new DateTime($this->raw);
    $this->now          = new DateTime();
    $this->difference   = $this->now->diff($this->date);

    $this->language     = $this->setLanguage($args['lang']);
    $this->phrasesKeys  = array_keys($this->language['phrases']);

    $this->isFuzzy      = ($args['fuzzy'] and array_key_exists('fuzzy', $this->language)) ? true : false;
  }


  protected function setLanguage($locale) {
    if (!file_exists(__DIR__.'/lang/'.$locale.'.php')) {
      $locale = c::get('relativedate.default', 'en');
    }
    return require 'lang/'.$locale.'.php';
  }


  public function get($length = null) {
    $this->length = $length;
    if(is_null($this->length) or $this->length === 0) return;

    if($this->isFuzzy) {
      return $this->getFuzzy();
    } else {
      return $this->getPrecise();
    }
  }


  protected function getPrecise() {
    $elements = $this->getElements();

    // add conjunctions if setting is set
    $glue = $this->glue();
    $statement = implode($glue, array_slice($elements, 0, $this->length));

    $phrase = $this->language['phrases'][$this->phrasesKeys[$this->difference->invert]];
    return str_ireplace('|:phrase|', $statement, $phrase);
  }


  protected function getElements() {
    $elements   = array();

    // years
    if ($this->difference->y > 0) {
      array_push($elements, array($this->difference->y, $this->language['y']));
    }
    // months
    if ($this->difference->m > 0) {
      array_push($elements, array($this->difference->m, $this->language['m']));
    }
    // weeks
    $weeks = intval($this->difference->d/7);
    if ($weeks > 0) {
      array_push($elements, array($weeks, $this->language['w']));
    }
    // days
    $days = $this->difference->d - ($weeks * 7);
    if ($days > 0) {
      array_push($elements, array($days, $this->language['d']));
    }
    // hours
    if ($this->difference->h > 0) {
      array_push($elements, array($this->difference->h, $this->language['h']));
    }
    // minutes
    if ($this->difference->i > 0) {
      array_push($elements, array($this->difference->i, $this->language['min']));
    }
    // seconds
    if ($this->difference->s > 0) {
      array_push($elements, array($this->difference->s, $this->language['sec']));
    }

    return array_map(array($this, 'term'), $elements);
  }


  protected function term($element) {
    $count = $element[0];
    $terms = $element[1];

    // only has one form
    if (count($terms) == 1) {
      $string = $terms[0];

    // simple singular/plural
    } elseif (count($terms) == 2 and !is_array($terms[1])) {
      if ($count > 1) $string = $terms[1];
      else            $string = $terms[0];

    // plurals with specific rules
    } else {
      foreach ($terms as $term) {
        if (is_array($term)) {
          $condition = 'return ' . str_replace('|:n|', $count, $term[0]) . ';';
          if (eval($condition)) {
            $string = $term[1];
          }
        }
      }
    }
    return str_ireplace('|:count|', $count, $string);
  }


  protected function glue() {
    $conjunction = c::get('relativedate.conjunction', true);
    if($conjunction !== false) {
      if($conjunction === true) {
        return isset($this->language['phrases']['and']) ? ' '.$this->language['phrases']['and'].' ' : ' ';
      } else {
        return ' '.$conjunction.' ';
      }
    } else {
      return ' ';
    }
  }


  protected function getFuzzy() {

    // today (at least 5 h difference but same exact calendar day)
    if ($this->isToday()) {
      return $this->language['fuzzy']['today'];
    }

    //  tomorrow/yesterday
    elseif ($this->is1Day()) {
      return $this->language['fuzzy']['1day'][$this->difference->invert];
    }

    // (last/next) WEEKDAY (up till 6 days difference)
    elseif ($this->isWeekday()) {
      return $this->getPhrase($this->language['fuzzy'][$this->date->format('D')],
                              $this->language['phrases'][$this->phrasesKeys[$this->difference->invert + 2]]);
    }

    // (last/next) week (nur +/-1 calendar week)
    elseif ($this->isWeek()) {
      return $this->getPhrase($this->language['fuzzy']['week'],
                              $this->language['phrases'][$this->phrasesKeys[$this->difference->invert + 2]]);
    }

    // (last/next) month (+/-1 calendar month)
    elseif ($this->isMonth()) {
      return $this->getPhrase($this->language['fuzzy']['month'],
                              $this->language['phrases'][$this->phrasesKeys[$this->difference->invert + 2]]);
    }

    // fallback
    else {
      return $this->getPrecise();
    }
  }

  protected function getPhrase($reference, $phrase) {
    // different forms, e.g. male and female endings
    if(is_array($phrase)) {
      if (is_array($reference)) {
        return str_ireplace('|:reference|', $reference[0], $phrase[$reference[1]]);
      } else {
        return str_ireplace('|:reference|', $reference, $phrase[0]);
      }
    } else {
      if (is_array($reference)) {
        return str_ireplace('|:reference|', $reference[$this->difference->invert], $phrase);
      } else {
        return str_ireplace('|:reference|', $reference, $phrase);
      }
    }

  }




  public function isToday() {
    return array_key_exists('today', $this->language['fuzzy']) and
           $this->difference->y == 0 and
           $this->difference->m == 0 and
           $this->difference->d == 0 and
           $this->difference->h >= 5 and
           $this->date->format('j') == $this->now->format('j');
  }

  public function is1Day() {
    $next   = new DateTime($this->raw);
    $next   = $next->modify('+1 day');
    $before = new DateTime($this->raw);
    $before = $before->modify('-1 day');
    return array_key_exists('1day', $this->language['fuzzy']) and
           $this->difference->y == 0 and
           $this->difference->m == 0 and
           $this->difference->d <= 1 and
           (
             $next->format('j')   == $this->now->format('j') or
             $before->format('j') == $this->now->format('j')
           );
  }

  public function isWeekday() {
    return array_key_exists('Mon',  $this->language['fuzzy']) and
           array_key_exists('last', $this->language['phrases']) and
           $this->difference->y == 0 and
           $this->difference->m == 0 and
           $this->difference->d >= 1 and
           $this->difference->d < 7;
  }

  public function isWeek() {
    $next   = new DateTime($this->raw);
    $next   = $next->modify('+1 week');
    $before = new DateTime($this->raw);
    $before = $before->modify('-1 week');
    return array_key_exists('week', $this->language['fuzzy']) and
           array_key_exists('last', $this->language['phrases']) and
           $this->difference->y == 0 and
           $this->difference->m == 0 and
           (
             $next->format('W')   == $this->now->format('W') or
             $before->format('W') == $this->now->format('W')
           );
  }

  public function isMonth() {
    $next   = new DateTime($this->raw);
    $next   = $next->modify('+1 month');
    $before = new DateTime($this->raw);
    $before = $before->modify('-1 month');
    return array_key_exists('month', $this->language['fuzzy']) and
           array_key_exists('last',  $this->language['phrases']) and
           $this->difference->y == 0 and
           $this->difference->m <= 1 and
           $this->difference->d <= 15 and
           (
             $next->format('n')   == $this->now->format('n') or
             $before->format('n') == $this->now->format('n')
           );
  }
}


