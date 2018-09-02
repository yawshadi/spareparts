<?php
class TaskAssignment extends tableDataObject{
    const TABLENAME= 'taskassignment';

    public static function listassignment($menteeuid,$contentid){
        global $lehrerdb;
        
        $query = "SELECT taskassignment.* FROM taskassignment WHERE menteeid='$menteeuid' AND cid='$contentid'";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        $total = sizeof($result);
        return ['total'=>$total,'list'=>$result];
    }
}