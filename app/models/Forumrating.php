<?php

class Forumrating extends tableDataObject{
    const TABLENAME= 'stars';

    public static function getmessageratings($messageid,$userid){
        global $lehrerdb;
        $query = "SELECT star FROM stars  WHERE msg_id='$messageid' AND uid='$userid'";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->fetchColumn();
        return $result;
    }

    public static function getaverageratings($messageid){
        global $lehrerdb;
        $query="SELECT AVG(star) as star from stars where msg_id=$messageid";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->fetchColumn();
        return $result;
    }
}