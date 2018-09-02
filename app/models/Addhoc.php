<?php
class Addhoc extends tableDataObject{
    const TABLENAME= 'adhocontent';

    public static function adhoclist($menteeuid,$mentoruid){
        global $lehrerdb;
        $list="SELECT * from adhocontent where  mentorid='$mentoruid' and deleted='0' order by aid desc limit 4 ";
        $lehrerdb->prepare($list);
        return $lehrerdb->resultSet();
    }

    public static function getadhocbyid($aid){
        global $lehrerdb;
        $list="SELECT * from adhocontent where aid='$aid'";
        $lehrerdb->prepare($list);
        return $lehrerdb->singleRecord();
    }

   
}