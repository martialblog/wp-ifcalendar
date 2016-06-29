<?php

function martialblog_ifc_pad($num) {

    $num = $num < 10 ? "0" . $num : $num;
    return $num;

}

function martialblog_ifc_convert($str){

    $ifc_date = get_option('date_format');
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


    if ($dayoftheyear >= 364) {
        $ifc_date = 'Year Day';
        return $ifc_date;
    }

    $ifc_year = date('Y', $timestamp);
    $ifc_month_idx = floor($dayoftheyear / 28);
    $ifc_month_num = martialblog_ifc_pad($ifc_month_idx + 1);
    $ifc_month = $MONTHS[$ifc_month_idx];
    $ifc_day = ($dayoftheyear % 28) + 1;
    $ifc_day_leading_zeros = martialblog_ifc_pad($ifc_day);

    $ifc_date = str_replace('j', $ifc_day, $ifc_date);
    $ifc_date = str_replace('d', $ifc_day_leading_zeros, $ifc_date);
    $ifc_date = str_replace('m', $ifc_month_num, $ifc_date);
    $ifc_date = str_replace('Y', $ifc_year, $ifc_date);
    $ifc_date = str_replace('F', $ifc_month, $ifc_date);

    return $ifc_date;
}

add_filter('get_the_date', 'martialblog_ifc_convert');
add_filter('get_comment_date', 'martialblog_ifc_convert');
#add_filter('the_date', 'martialblog_ifc_convert');
#add_filter('date', 'martialblog_ifc_convert');

?>