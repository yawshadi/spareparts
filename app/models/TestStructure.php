<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 7/12/18
 * Time: 11:47 AM
 */

class TestStructure extends tableDataObject{
    const TABLENAME= 'testcms';

    public static function getalltest(){
        global $lehrerdb;
        $getalltest = "Select * from testcms order by parentorder,orderid  asc";
        $lehrerdb->prepare($getalltest);
        return $lehrerdb->resultSet();
    }

    public static function gettestbyid($testid){
        global $lehrerdb;
        $gettest = "Select * from testcms where testid='$testid'";
        $lehrerdb->prepare($gettest);
        return $lehrerdb->singleRecord();
    }
    public static function deletequestionbyid($testid){
        global $lehrerdb;
        $delq = "DELETE from testcms where testid='$testid'";
        $lehrerdb->prepare($delq);
        $lehrerdb->execute();

    }

    public static function gettestbycategory($parentcategory){
        global $lehrerdb;
        $getalltest = "Select * from testcms where category='$parentcategory' order by orderid  asc ";
        $lehrerdb->prepare($getalltest);
        return $lehrerdb->resultSet();

    }

    public static function getfirstestbycategory($parentcategory){
        global $lehrerdb;
        $getalltest = "SELECT * FROM testcms WHERE category='$parentcategory' order by orderid asc limit 1";
        $lehrerdb->prepare($getalltest);
        return $lehrerdb->resultSet();

    }

    public static function getnextestbycategory($orderid, $parentcategory){
        global $lehrerdb;
        $getalltest = "select * from testcms where orderid = (select min(orderid) from testcms where orderid > '$orderid' and category='$parentcategory')";
        $lehrerdb->prepare($getalltest);
        return $lehrerdb->resultSet();

    }

    public static function getprevioustestbycategory($orderid, $parentcategory){
        global $lehrerdb;
        $getalltest = "select * from testcms where orderid = (select max(orderid) from testcms where orderid < '$orderid' and category='$parentcategory')";
        $lehrerdb->prepare($getalltest);
        return $lehrerdb->resultSet();

    }

    public static function getcoursescount($category, $parent, $uid)
    {
        global $lehrerdb;

        $getcount = "SELECT count(*) as total from content where category='$category' and parentcategory = '$parent' and deleted='0'";
        $coursecount = $lehrerdb->prepare($getcount);
        $coursecount = $lehrerdb->fetchColumn();

        $getcompleted = "SELECT  count(ratecount) as total from ratings join content on ratings.contentid=content.cid
            where ratings.userid='$uid' and ratings.ratecount='3' and content.deleted='0' and ratings.parentcontent='$category'
            and ratings.module='$parent'";
        $coursecompleted = $lehrerdb->prepare($getcompleted);
        $coursecompleted = $lehrerdb->fetchColumn();

        $returnarray = array("coursecompleted" => $coursecompleted, "coursecount" => $coursecount);

            return $returnarray;
        }

    public static function swapcontent($current_testid,$next_testid){
        global $lehrerdb;
        $select_nextcategory    = TestStructure::gettestbyid($next_testid);
        $select_currentcategory = TestStructure::gettestbyid($current_testid);

        $nextcategory     = $select_nextcategory->category;
        $nextorderid      = $select_nextcategory->orderid;
        $currentorderid   = $select_currentcategory->orderid;
        $currentcategory  = $select_currentcategory->category;

        if($currentcategory==$nextcategory){
            if($currentorderid > $nextorderid){
                $getminimum_testid="select min(testid) as testid from testcms where testid >= $next_testid and category='$currentcategory' ";
                $lehrerdb->prepare($getminimum_testid);
                $result=$lehrerdb->singleRecord();
                $testid_for_update=$result->testid;
                $select_orderid_for_update    = TestStructure::gettestbyid($testid_for_update);
                $orderid_for_update=$select_orderid_for_update->orderid;

                $first_update="update testcms set orderid='$orderid_for_update' where testid='$current_testid'";
                $lehrerdb->prepare($first_update);
                $lehrerdb->execute();

                $second_update="update testcms set orderid='$currentorderid' where testid='$testid_for_update'";
                $lehrerdb->prepare($second_update);
                $lehrerdb->execute();
            }else{
                $getmaximum_orderid="select max(orderid) as orderid from testcms where orderid < $nextorderid and category='$currentcategory' ";
                $lehrerdb->prepare($getmaximum_orderid);
                $result=$lehrerdb->singleRecord();
                $orderid_for_update = $result->orderid;

                $update="UPDATE
                testcms t1 INNER JOIN testcms t2
                ON (t1.orderid, t2.orderid) IN (($currentorderid,$orderid_for_update),($orderid_for_update,$currentorderid))
                SET
                t1.orderid = t2.orderid";
                 $lehrerdb->prepare($update);
                 $lehrerdb->execute();
            }

        }else{

                $first_update="update testcms set category='$nextcategory' where testid='$current_testid'";
                $lehrerdb->prepare($first_update);
                $lehrerdb->execute();

        }
       
    }
}