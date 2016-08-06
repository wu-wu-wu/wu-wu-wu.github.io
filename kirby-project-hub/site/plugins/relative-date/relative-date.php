<?php

require 'core.php';


/**
 *  Field method '->relative($threshold, $gran)'
 */

field::$methods['relative'] = function($field, $args = null) {
    $defaults = array(
      'lang'      => (count(site()->languages()) >= 1) ? site()->language()->code() : c::get('relativedate.lang', 'en'),
      'length'    => c::get('relativedate.length', 2),
      'threshold' => c::get('relativedate.threshold', false),
      'fuzzy'     => c::get('relativedate.fuzzy', true)
    );

    if (is_array($args))
      $args = array_merge($defaults, $args);
    elseif (is_string($args) and strlen($args) >= 2 and strlen($args) <= 5)
      $args = array_merge($defaults, array('lang' => $args));
    elseif (is_int($args))
      $args = array_merge($defaults, array('length' => $args));
    else
      $args = $defaults;

    // only convert to relative if time difference no exceeds threshold
    if ($args['threshold'] === false or
        abs(strtotime($field->value) - time()) <= $args['threshold']) {
      try {
        $relative = new RelativeDate($field->value, $args);
        $field->value = $relative->get($args['length']);
      } catch (Exception $e) {
        $field->value = $field->value;
      }
    }

    return $field;
};


/**
 *  Kirbytext tag '(relativedate: $date $threshold, $gran)'
 */

kirbytext::$tags['relativedate'] = array(
  'attr' => array(
      'lang',
      'length',
      'threshold',
      'fuzzy'
    ),
  'html' => function($tag) {
    $args = array(
      'lang'      => $tag->attr('lang', (count(site()->languages()) >= 1) ? site()->language()->code() : c::get('relativedate.lang', 'en')),
      'length'    => $tag->attr('length', c::get('relativedate.length', 2)),
      'threshold' => $tag->attr('threshold', c::get('relativedate.threshold', false)),
      'fuzzy'     => $tag->attr('fuzzy', c::get('relativedate.fuzzy', true))
    );

    $args['fuzzy'] = ($args['fuzzy'] === 'false') ? false : $args['fuzzy'];

    if ($args['threshold'] === false or
        abs(strtotime($tag->attr('relativedate')) - time()) <= $args['threshold']) {
      try {
        $relative = new RelativeDate($tag->attr('relativedate'), $args);
        return $relative->get($args['length']);
      } catch (Exception $e) {
        return $tag->attr('relativedate');
      }
    } else {
      return $tag->attr('relativedate');
    }

  }
);
