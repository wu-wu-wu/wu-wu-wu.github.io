<?php

/**
 *    Language file: Russian (ru)
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
    'after_now'   => 'через |:phrase|',
    'before_now'  => '|:phrase| назад',
    // 'next'        => 'next |:reference|',
    // 'last'        => 'last |:reference|',
  ),

  'sec' => array(
    array($rules[0], '|:count| секунду'),
    array($rules[1], '|:count| секунды'),
    array($rules[2], '|:count| секунд'),
  ),
  'min' => array(
    array($rules[0], '|:count| минуту'),
    array($rules[1], '|:count| минуты'),
    array($rules[2], '|:count| минут'),
  ),
  'h'   => array(
    array($rules[0], '|:count| час'),
    array($rules[1], '|:count| часа'),
    array($rules[2], '|:count| часов'),
  ),
  'd'   => array(
    array($rules[0], '|:count| день'),
    array($rules[1], '|:count| дня'),
    array($rules[2], '|:count| дней'),
  ),
  'w'   => array(
    array($rules[0], '|:count| неделю'),
    array($rules[1], '|:count| недели'),
    array($rules[2], '|:count| недель'),
  ),
  'm'   => array(
    array($rules[0], '|:count| месяц'),
    array($rules[1], '|:count| недели'),
    array($rules[2], '|:count| недель'),
  ),
  'y'   => array(
    array($rules[0], '|:count| год'),
    array($rules[1], '|:count| года'),
    array($rules[2], '|:count| лет'),
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
