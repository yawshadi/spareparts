<?php

class Forummessage extends tableDataObject{
    const TABLENAME= 'forum_message';

    public static function getmessages($contentid){
        global $lehrerdb;
        $year=date('Y');
        $query = "SELECT forum_message.*,users.firstname,users.lastname,users.profilephoto FROM forum_message join users on forum_message.uid=users.uid WHERE  forum_message.cid='$contentid' ORDER BY msg_id DESC";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        $total = sizeof($result);
        return ['total'=>$total,'messagelist'=>$result];
    }

    
    public static  function timeago($datetime){
        $then = new DateTime($datetime);
        $now = new DateTime();
        $delta = $now->diff($then);
        
        $quantities = array(
            'year' => $delta->y,
            'month' => $delta->m,
            'day' => $delta->d
           );
        
        $str = '';
        foreach($quantities as $unit => $value) {
            if($value == 0) continue;
            $str .= $value . ' ' . $unit;
            if($value != 1) {
                $str .= 's';
            }
            $str .=  ', ';
        }
        $str = $str == '' ? 'a moment ' : substr($str, 0, -2);
        
        echo $str."  ago";
     }
}