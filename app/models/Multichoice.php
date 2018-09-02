<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 7/4/18
 * Time: 12:52 PM
 */

class Multichoice extends tableDataObject
{
    const TABLENAME = 'multichoice';

    public static function deletemultichoice($testid=null){
        global $lehrerdb;
        if(is_null($testid)){

        }else{
           
            $delq = "DELETE FROM  multichoice  WHERE testid='$testid'";
            $lehrerdb->prepare($delq);
            $lehrerdb->execute();

        }
    }
}