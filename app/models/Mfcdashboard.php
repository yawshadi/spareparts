<?php

class Mfcdashboard extends tableDataObject{
    const TABLENAME= 'mfcdashboard';

    public static function savementee($menteeuid){
        $mfcuid=$_SESSION['userid'];
        $primaryid=null;
        $check=self::check();
        if(is_object($check)){
            $primaryid=$check->id;
        }
        $mfc= new Mfcdashboard($primaryid);
        $data=& $mfc->recordObject;
        $data->menteeuid=$menteeuid;
        $data->mfcuid=$mfcuid;
        $mfc->store();
    }

    public static function check(){
        $mfcuid = $_SESSION['userid'];
        global $lehrerdb;
        $check= "SELECT mfcdashboard.* from mfcdashboard WHERE mfcuid=$mfcuid";
        $lehrerdb->prepare($check);
        return $lehrerdb->singleRecord();

    }
}