<?php

class Modules extends tableDataObject{
    const TABLENAME= 'modules';


    public static function deletemodulebyid($mid){
        global $lehrerdb;
        $delq = "DELETE from modules where mid='$mid'";
        $lehrerdb->prepare($delq);
        $lehrerdb->execute();

    }

    public static function getmodulebyid($mid){
       
        global $lehrerdb;
        $getmod = " Select * from modules where mid='$mid'";
        $lehrerdb->prepare($getmod);
        return $lehrerdb->singleRecord();
    }

    public static function getorderedmodules(){
       
        global $lehrerdb;
        $getmod = " Select * from modules order by parentorder,orderid asc";
        $lehrerdb->prepare($getmod);
        return $lehrerdb->resultSet();
    }
    public static function getmodulenames(){
        global $lehrerdb;
        $getmod = "select distinct parent, parentorder from modules order by parentorder asc";
        $lehrerdb->prepare($getmod);
        return $lehrerdb->resultSet();

    }

    public static function getmodulebyname($parentcategory,$nameexception=null){
        global $lehrerdb;
        if(is_null($nameexception)){
        $getmod = "select * from modules where parent='$parentcategory' order by orderid asc";
        }else{
        $getmod = "select * from modules where parent='$parentcategory' and name <> '$nameexception' order by orderid asc";
  
        }
        $lehrerdb->prepare($getmod);
        return $lehrerdb->resultSet();
    }

    public static function mentordescription($parentcategory){
        global $lehrerdb;
        $getmod = "select mentordescription from modules where parent='$parentcategory' and mentordescription <> ''";
        $lehrerdb->prepare($getmod);
        return $lehrerdb->fetchColumn();
    }

    public static function getcolorfromcontent($category){
        global $lehrerdb;
        $getcolor = "Select color from modules where  name ='$category'";
        $lehrerdb->prepare($getcolor);
        return $lehrerdb->fetchColumn();   
    }

public static function returnparentmodule($hash){
        if($hash=='module0'){
        $parent='Arbeitsmethoden';
        }else if($hash=='module1'){
        $parent='Medienbildung';
        }else if($hash=='module2'){
        $parent='Persönlichkeitsbildung';
        }else if($hash=='module3'){
        $parent='Berufsorientierung';
        }else if($hash=='module4'){
        $parent='Ökonomische Grundbildung';
        }else{
            $parent='Arbeitsmethoden';
        }

        return $parent;
}

}