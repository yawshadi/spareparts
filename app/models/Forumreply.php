<?php

class Forumreply extends tableDataObject{
    const TABLENAME= 'forum_reply';

    public static function getreplies($messageid){
        global $lehrerdb;
       
        $query = "SELECT forum_reply.*,users.firstname,users.lastname,users.profilephoto FROM forum_reply join users on forum_reply.uid=users.uid WHERE  forum_reply.msg_id='$messageid' ORDER BY reply_id DESC";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        return $result;
    }
}