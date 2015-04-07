<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CommonFunctions {

    public $user, $singleArray;

    public static function getDays() {

        $intTotalNoDays;
        for ($i = 1; $i <= 31; $i++) {
            $intTotalNoDays[$i] = $i;
        }
        return array('0' => 'Day') + $intTotalNoDays;
    }

    public static function getMonths() {
        for ($monthNum = 1; $monthNum <= 12; $monthNum++) {
            $months[$monthNum] = date('F', mktime(0, 0, 0, $monthNum, 1));
        }

        return array(0 => 'Month') + $months;
    }

    public static function getYears() {
        $thisYear = date('Y', time());

        for ($yearNum = $thisYear; $yearNum >= 1920; $yearNum--) {
            $years[$yearNum] = $yearNum;
        }

        return array(0 => 'Year') + $years;
    }

    public static function getRangeYears($minRange) {
        $thisYear = date('Y', time()) + 1;

        for ($yearNum = $thisYear; $yearNum >= $minRange; $yearNum--) {
            $years[$yearNum] = $yearNum;
        }

        return array(0 => 'Year') + $years;
    }

    public static function getCurrentTimeStamp() {

        date_default_timezone_set('Asia/Kolkata');
        return date('Y-m-d H:i:s');
    }

    public static function fetchRecords() {
        $user = Yii::app()->db->createCommand()
                ->select('vehicle_id,vehicle_name,vehicle_color,vehicle_model,vehicle_year')
                ->from('tbl_vehicles')
                ->queryAll();
        return CommonFunctions::getArrayRecords($user);
    }

    public static function display($content) {
        echo '<pre>';
        print_r($content);
        echo '</pre>';
        die;
    }

    public static function getArrayRecords($array) {
        $singleArray[0] = 'Select Vehicle ';
        foreach ($array AS $key) {
            $singleArray[$key['vehicle_id']] = $key['vehicle_name'] . " " . $key['vehicle_model'] . " " . $key['vehicle_color'] . " " . $key['vehicle_year'];
        }
        return $singleArray;
    }

}
