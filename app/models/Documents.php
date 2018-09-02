<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 7/10/18
 * Time: 9:44 AM
 */

class Documents extends tableDataObject {
    const TABLENAME= 'documents';

    public static function listdocuments($tablename,$randomnumber){
        global $lehrerdb;
        $listquery="select * from documents join $tablename on documents.randomnumber=$tablename.randomnumber where $tablename.randomnumber='$randomnumber'";
        $lehrerdb->prepare($listquery);
        return $lehrerdb->resultSet();
    }

    public static function listmenteedocuments($uid,$cid){
        global $lehrerdb;
        $listquery="select * from documents where uid='$uid' and cid='$cid'";
        $lehrerdb->prepare($listquery);
        return $lehrerdb->resultSet();
    }
    public static function checkcompletedassignment($category,$lessontype,$cid,$uid){
        global $lehrerdb;
        if($category=='Erarbeiten'){
        if($lessontype=='Lösung hochladen'){
            $listquery="select count(*) as total from documents where uid='$uid' and cid='$cid'";
            $lehrerdb->prepare($listquery);
            $lessontotal= $lehrerdb->fetchColumn();
            return $lessontotal;
        }
        if($lessontype=='Bearbeitung über Textfeld'){
            $checkassignment ="Select * from taskassignment where cid = '$cid' and menteeid='$uid'";
            $lehrerdb->prepare($checkassignment);
            $assignment= $lehrerdb->fetchColumn();
            return $assignment;
        }
  
    }else{
        return 1;
    }
    }

    public static function deletedocumentbyid($did){
        global $lehrerdb;
        $deletequery="Delete from documents where did='$did'";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
    }
}