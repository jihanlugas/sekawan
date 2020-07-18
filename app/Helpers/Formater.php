<?php

namespace App\Helpers;

class Formater
{
    public static $dateFormat='d M Y';
    public static $numberFormat=array('decimals'=>'0', 'decimalSeparator'=>',', 'thousandSeparator'=>'.');
    public static $numberFormatWithDecimals=array('decimals'=>'2', 'decimalSeparator'=>',', 'thousandSeparator'=>'.');
    public static $dateFormatWithNumber= 'd-m-Y';
    public static $datetimeFormat = 'd M Y, H:i';
    public static $daymonthFormat='d M';
    public static $datetimeFormatWithNumber='d-m-y H:i:s';
    public static $datetimeFormatWithMonthSec = 'd-M-Y H:i:s';
    public static $datetimeFormatWithDay = 'l, d-M-Y H:i';
    public static $timeFormat='H:i';
    public static $timeFormatWithSecond='H:i:s';

    //put your code here
//    public function formatDate($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$dateFormat,$value));
//    }

    public static function formatNumber($value)
    {
        return number_format($value, self::$numberFormat['decimals'], self::$numberFormat['decimalSeparator'], self::$numberFormat['thousandSeparator']);
    }

    public function formatDateWithNumber($value)
    {
        if(!is_numeric($value)) $value=strtotime ($value);
        return date(self::$dateFormatWithNumber,$value);
    }

//    public function formatDatetime($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$datetimeFormat,$value));
//    }

//    public function formatDaymonth($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$daymonthFormat,$value));
//    }

//    public function formatDatetimeWithNumber($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$datetimeFormatWithNumber,$value));
//    }

//    public function formatDatetimeWithMonthSec($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$datetimeFormatWithMonthSec,$value));
//    }

//    public function formatDatetimeWithDay($value)
//    {
//        if(!is_numeric($value)) $value=strtotime ($value);
//        return self::$toIndonesia(date(self::$datetimeFormatWithDay,$value));
//    }

    public function formatTime($value)
    {
        if(!is_numeric($value)) $value=strtotime ($value);
        return date(self::$timeFormat,$value);
    }

    public function formatTimeWithSec($value)
    {
        if(!is_numeric($value)) $value=strtotime ($value);
        return date(self::$timeFormatWithSecond,$value);
    }

//    public function formatMonth($value)
//    {
//        return self::$convertMonth($value);
//    }

    public function formatNumberWithDecimals($value)
    {
        return number_format($value,self::$numberFormatWithDecimals['decimals'],self::$numberFormatWithDecimals['decimalSeparator'],self::$numberFormatWithDecimals['thousandSeparator']);
    }

    private function toIndonesia($strDate)
    {
        $strDate = str_replace('May', 'Mei', $strDate);
        $strDate = str_replace('Aug', 'Ags', $strDate);
        $strDate = str_replace('Oct', 'Okt', $strDate);
        $strDate = str_replace('Dec', 'Des', $strDate);
        $strDate = str_replace("Monday", "Senin",$strDate);
        $strDate = str_replace("Tuesday", "Selasa",$strDate);
        $strDate = str_replace("Wednesday", "Rabu",$strDate);
        $strDate = str_replace("Thursday", "Kamis",$strDate);
        $strDate = str_replace("Friday", "Jum'at",$strDate);
        $strDate = str_replace("Saturday", "Sabtu",$strDate);
        $strDate = str_replace("Sunday", "Minggu",$strDate);
        return $strDate;
    }

    private function convertMonth($strMonth)
    {
        $strMonth = str_replace('Jan', '01', $strMonth);
        $strMonth = str_replace('Feb', '02', $strMonth);
        $strMonth = str_replace('Mar', '03', $strMonth);
        $strMonth = str_replace('Apr', '04', $strMonth);
        $strMonth = str_replace('May', '05', $strMonth);
        $strMonth = str_replace('Jun', '06', $strMonth);
        $strMonth = str_replace('Jul', '07', $strMonth);
        $strMonth = str_replace('Aug', '08', $strMonth);
        $strMonth = str_replace('Sep', '09', $strMonth);
        $strMonth = str_replace('Oct', '10', $strMonth);
        $strMonth = str_replace('Nov', '11', $strMonth);
        $strMonth = str_replace('Dec', '12', $strMonth);
        return $strMonth;
    }
}
