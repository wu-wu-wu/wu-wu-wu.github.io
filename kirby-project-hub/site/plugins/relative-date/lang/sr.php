<?php

/**
 *    Language file: Serbian (sr)
 *    ----
 *    Author:   distantnative (https://github.com/distantnative)
 *    Version:  0.9
 */

$rules = array(
  '|:n|%10 == 1 and |:n|%100 != 11',
  '|:n|%10 >= 2 and |:n|%10 <= 4 and (|:n|%100 < 10 or |:n|%100 >= 20)',
  'true'
);

return array(

  'phrases'  => array(
    'after_now'   => '|:phrase| od sada',
    'before_now'  => 'pre |:phrase|',
    // 'next'        => 'next |:reference|',
    // 'last'        => 'last |:reference|',
  ),

  'sec' => array(
    array($rules[0], '|:count| sekunde'),
    array($rules[1], '|:count| sekunde'),
    array($rules[2], '|:count| sekund'),
  ),
  'min' => array(
    array($rules[0], '|:count| minut'),
    array($rules[1], '|:count| minuta'),
    array($rules[2], '|:count| minuta'),
  ),
  'h'   => array(
    array($rules[0], '|:count| sat'),
    array($rules[1], '|:count| sata'),
    array($rules[2], '|:count| sati'),
  ),
  'd'   => array(
    array($rules[0], '|:count| dan'),
    array($rules[1], '|:count| dana'),
    array($rules[2], '|:count| dana'),
  ),
  'w'   => array(
    array($rules[0], '|:count| nedelja'),
    array($rules[1], '|:count| nedelje'),
    array($rules[2], '|:count| nedelja'),
  ),
  'm'   => array(
    array($rules[0], '|:count| mesec'),
    array($rules[1], '|:count| meseca'),
    array($rules[2], '|:count| meseci'),
  ),
  'y'   => array(
    array($rules[0], '|:count| godina'),
    array($rules[1], '|:count| godine'),
    array($rules[2], '|:count| godina'),
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
