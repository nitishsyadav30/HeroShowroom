<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CommonFunctions {
    
    public static function getDays(){
        
      $intTotalNoDays;
      for($i=1;$i<=31;$i++){
          $intTotalNoDays[$i]=$i;
      }
      return array('0'=>'Day') + $intTotalNoDays ;
    }
    public static function getMonths(){
          for($monthNum = 1; $monthNum <= 12; $monthNum++){
            $months[$monthNum] = date('F', mktime(0, 0, 0, $monthNum, 1));
        }
 
        return array(0 => 'Month') + $months;
    }
    public static function getYears(){
         $thisYear = date('Y', time());
 
        for($yearNum = $thisYear; $yearNum >= 1920; $yearNum--){
            $years[$yearNum] = $yearNum;
        }
 
        return array(0 => 'Year') + $years;
    }
    
}
