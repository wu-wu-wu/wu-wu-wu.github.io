<?php

/**
 *    Language file: Polish (pl)
 *    ----
 *    Author:   distantnative (https://github.com/distantnative)
 *    Version:  0.9
 */

$rules = array(
  '|:n| == 1',
  '|:n|%10 >= 2 and |:n|%10 <= 4 and (|:n|%100 < 10 or |:n|%100 >= 20)',
  'true'
);

return array(

  'phrases'  => array(
    'after_now'   => '|:phrase| od teraz',
    'before_now'  => '|:phrase| temu',
    // 'next'        => 'next |:reference|',
    // 'last'        => 'last |:reference|',
  ),

  'sec' => array(
    array($rules[0], '|:count| sekunda'),
    array($rules[1], '|:count| sekundy'),
    array($rules[2], '|:count| sekund'),
  ),
  'min' => array(
    array($rules[0], '|:count| minuta'),
    array($rules[1], '|:count| minuty'),
    array($rules[2], '|:count| minut'),
  ),
  'h'   => array(
    array($rules[0], '|:count| godzina'),
    array($rules[1], '|:count| godziny'),
    array($rules[2], '|:count| godzin'),
  ),
  'd'   => array(
    array($rules[0], '|:count| dzień'),
    array($rules[1], '|:count| dni'),
    array($rules[2], '|:count| dni'),
  ),
  'w'   => array(
    array($rules[0], '|:count| tydzień'),
    array($rules[1], '|:count| tygodnie'),
    array($rules[2], '|:count| tygodni'),
  ),
  'm'   => array(
    array($rules[0], '|:count| miesiąc'),
    array($rules[1], '|:count| miesiące'),
    array($rules[2], '|:count| miesięcy'),
  ),
  'y'   => array(
    array($rules[0], '|:count| rok'),
    array($rules[1], '|:count| lata'),
    array($rules[2], '|:count| lat'),
  ),

  /*
  'fuzzy' => array(
    'today' => 'today',
    '1day'  => array('tomorrow','yesterday'),

    'Mon'   => 'Monday',
    'Tue'   => 'Tuesday',
    'Wed'   => 'Wednesday',
    'Thu'   => 'Thursday',
    'Fri'   => 'Friday',
    'Sat'   => 'Saturday',
    'Sun'   => 'Sunday',

    'week'  => 'week',
    'month' => 'month',
  ),
  */

);
