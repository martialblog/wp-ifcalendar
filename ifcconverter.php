<?php

function martialblog_ifc_convert($str){

    $timestamp = strtotime($str);
    $dayoftheyear = date("z", $timestamp);

    $MONTHS = array(
    'March',
    'April',
    'May',
    'June',
    'Quintilis',
    'Sextilis',
    'September',
    'October',
    'November',
    'December',
    'January',
    'February',
    'Sol'
    );

    $ifc_year = '2016';

    if ($dayoftheyear >= 364) {
        $ifc_date = 'Year Day';
        return $ifc_date;
    }

    $month_idx = floor($dayoftheyear / 28);
    $ifc_month = $MONTHS[$month_idx];
    $ifc_day = ($dayoftheyear % 28) + 1;

    $ifc_date = "{$ifc_month} {$ifc_day}, {$ifc_year}";
    return $ifc_date;

}

add_filter('get_the_date', 'martialblog_ifc_convert');
add_filter('get_comment_date', 'martialblog_ifc_convert');
#add_filter('the_date', 'martialblog_ifc_convert');
#add_filter('date', 'martialblog_ifc_convert');

?>