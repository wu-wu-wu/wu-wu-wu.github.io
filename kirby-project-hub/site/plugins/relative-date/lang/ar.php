<?php

/**
 *    Language file: Arabic (ar)
 *    ----
 *    Author:   distantnative (https://github.com/distantnative)
 *    Version:  0.9
 */

$rules = array(
  '|:n| == 0',
  '|:n| == 1',
  '|:n| == 2',
  '|:n|%100 >= 3 and |:n|%100 <= 10',
  '|:n|%100 >= 11',
  'true'
);

return array(

  'phrases'  => array(
    'after_now'   => 'من الآن |:phrase|',
    'before_now'  => 'منذ |:phrase|',
    // 'next'        => 'next |:reference|',
    // 'last'        => 'last |:reference|',
  ),

  'sec' => array(
    array($rules[0], 'ثانية'),
    array($rules[1], 'ثانية'),
    array($rules[2], 'ثانيتين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| ثوان'),
  ),
  'min' => array(
    array($rules[0], 'دقيقة'),
    array($rules[1], 'دقيقة'),
    array($rules[2], 'دقيقتين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| دقائق'),
  ),
  'h'   => array(
    array($rules[0], 'ساعة'),
    array($rules[1], 'ساعة'),
    array($rules[2], 'ساعتين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| ساعات'),
  ),
  'd'   => array(
    array($rules[0], 'يوم'),
    array($rules[1], 'يوم'),
    array($rules[2], 'يومين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| أيام'),
  ),
  'w'   => array(
    array($rules[0], 'أسبوع'),
    array($rules[1], 'أسبوع'),
    array($rules[2], 'أسبوعين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| أسابيع'),
  ),
  'm'   => array(
    array($rules[0], 'شهر'),
    array($rules[1], 'شهر'),
    array($rules[2], 'شهرين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| شهور / أشهر'),
  ),
  'y'   => array(
    array($rules[0], 'سنة'),
    array($rules[1], 'سنة'),
    array($rules[2], 'سنتين'),
    // array($rules[3], '|:count| '),
    // array($rules[4], '|:count| '),
    array($rules[5], '|:count| سنوات / سنين'),
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
