<?php 
$arr = array(
    1 => array(
        1 => '11/05/2013',
        2 => 'Executive Planning Day'
    ),
    2 => array(
        1 => '13/06/2013',
        2 => 'Middle Leaders Planning Day'
    ),
    3 => array(
        1 => '12/07/2013',
        2 => 'New Staff Induction Day'
    ),
    4 => array(
        1 => '13/04/2013',
        2 => 'Staff Conference Day No. 1'
    ),
    5 => array(
        1 => '14/04/2013',
        2 => 'Staff Conference Day No. 2'
    ),
    6 => array(
        1 => '15/02/2013',
        2 => 'Staff Conference Day No. 3'
    ),
    7 => array(
        1 => '16/03/2013',
        2 => 'Australia Day'
    )
);
 
uasort($arr, function($a, $b){
    $format = 'd/m/Y'; 
    $ascending = false;
    $zone = new DateTimeZone('UTC');
    $d1 = DateTime::createFromFormat($format, $a[1], $zone)->getTimestamp();
    $d2 = DateTime::createFromFormat($format, $b[1], $zone)->getTimestamp();
    return $ascending ? ($d1 - $d2) : ($d2 - $d1);
});
 
print_r($arr);
