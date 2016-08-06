<?php

/**
 *    Language file: Czech (cs)
 *    ----
 *    Author:   distantnative (https://github.com/distantnative)
 *    Version:  0.9
 */

$rules = array(
  '|:n| == 1',
  '|:n|%10 >= 2 and |:n|%10 <= 4',
  'true'
);

return array(

  'phrases'  => array(
    'after_now'   => 'za |:phrase|',
    'before_now'  => 'před |:phrase|',
    // 'next'        => 'next |:reference|',
    // 'last'        => 'last |:reference|',
  ),

  'sec' => array(
    array($rules[0], 'sekundu'),
    array($rules[1], '|:count| sekundy'),
    array($rules[2], '|:count| sekund'),
  ),
  'min' => array(
    array($rules[0], 'minutu'),
    array($rules[1], '|:count| minuty'),
    array($rules[2], '|:count| minut'),
  ),
  'h'   => array(
    array($rules[0], 'hodinu'),
    array($rules[1], '|:count| hodiny'),
    array($rules[2], '|:count| hodin'),
  ),
  'd'   => array(
    array($rules[0], 'den'),
    array($rules[1], '|:count| dny'),
    array($rules[2], '|:count| dni'),
  ),
  'w'   => array(
    array($rules[0], 'týden'),
    array($rules[1], '|:count| týdny'),
    array($rules[2], '|:count| týdnů'),
  ),
  'm'   => array(
    array($rules[0], 'měsíc'),
    array($rules[1], '|:count| měsíce'),
    array($rules[2], '|:count| měsíců'),
  ),
  'y'   => array(
    array($rules[0], 'rok'),
    array($rules[1], '|:count| roky'),
    array($rules[2], '|:count| let'),
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
