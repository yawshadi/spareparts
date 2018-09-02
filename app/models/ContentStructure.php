<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 7/4/18
 * Time: 12:52 PM
 */

class ContentStructure extends tableDataObject
{
    const TABLENAME = 'content';

    public static function getallcontent($category, $parentcategory)
    {
        global $lehrerdb;
        $getallcontent = "Select * from content where category = '$category' and parentcategory='$parentcategory'and deleted='0' order by orderid asc";
        $lehrerdb->prepare($getallcontent);
        return $lehrerdb->resultSet();
    }

    public static function getalldeletedcontent($category, $parentcategory)
    {
        global $lehrerdb;
        $getallcontent = "Select * from content where category = '$category' and parentcategory='$parentcategory'and deleted='1' order by orderid asc";
        $lehrerdb->prepare($getallcontent);
        return $lehrerdb->resultSet();
    }

    public static function deletecontentbyid($cid)
    {
        global $lehrerdb;
        $delq = "UPDATE content SET deleted='1' where cid='$cid'";
        $lehrerdb->prepare($delq);
        $lehrerdb->execute();

    }

    public static function getcontentbyid($cid)
    {
        global $lehrerdb;
        $getcontent = " Select * from content where cid='$cid'";
        $lehrerdb->prepare($getcontent);
        $result=$lehrerdb->singleRecord();
        if(is_object($result)){
            return $result;
        }else{
            throw new frameworkError("Sorry this content does not exsit or has been moved");

        }
         
    }

    public static function swapcontent($current_cid, $next_cid)
    {
        global $lehrerdb;
        $select_nextcategory = ContentStructure::getcontentbyid($next_cid);
        $select_currentcategory = ContentStructure::getcontentbyid($current_cid);

        $nextcategory = $select_nextcategory->category;
        $nextorderid = $select_nextcategory->orderid;
        $currentorderid = $select_currentcategory->orderid;
        $currentcategory = $select_currentcategory->category;

        if ($currentcategory == $nextcategory) {
            if ($currentorderid > $nextorderid) {
                $getminimum_cid = "select min(cid) as cid from content where cid >= $next_cid and category='$currentcategory' and deleted=0";
                $lehrerdb->prepare($getminimum_cid);
                $result = $lehrerdb->singleRecord();
                $cid_for_update = $result->cid;
                $select_orderid_for_update = ContentStructure::getcontentbyid($cid_for_update);
                $orderid_for_update = $select_orderid_for_update->orderid;

                $first_update = "update content set orderid='$orderid_for_update' where cid='$current_cid'";
                $lehrerdb->prepare($first_update);
                $lehrerdb->execute();

                $second_update = "update content set orderid='$currentorderid' where cid='$cid_for_update'";
                $lehrerdb->prepare($second_update);
                $lehrerdb->execute();
            } else {
                $getmaximum_orderid = "select max(orderid) as orderid from content where orderid < $nextorderid and category='$currentcategory' and deleted='0'";
                $lehrerdb->prepare($getmaximum_orderid);
                $result = $lehrerdb->singleRecord();
                $orderid_for_update = $result->orderid;

                $update = "UPDATE
                content t1 INNER JOIN content t2
                ON (t1.orderid, t2.orderid) IN (($currentorderid,$orderid_for_update),($orderid_for_update,$currentorderid))
                SET
                t1.orderid = t2.orderid";
                $lehrerdb->prepare($update);
                $lehrerdb->execute();
            }

        } else {

            $first_update = "update content set category='$nextcategory' where cid='$current_cid'";
            $lehrerdb->prepare($first_update);
            $lehrerdb->execute();

            $second_update = "update ratings set parentcontent='$nextcategory' where contentid='$current_cid'";
            $lehrerdb->prepare($second_update);
            $lehrerdb->execute();
        }

    }

    public static function newlecture($cid, $orderid, $category, $parentcategory, $state)
    {
        global $lehrerdb;
        if($state=='nextlesson'){
        $getnextid = "Select cid, contenttype from content where orderid =(select min(orderid) from content where orderid > '$orderid' and category = '$category' and parentcategory ='$parentcategory' and deleted='0')";
        $lehrerdb->prepare($getnextid);
        $result = $lehrerdb->singleRecord();
        $nextid = @$result->cid;
        $nextype = @$result->contenttype;
        if ($nextype == '' and $category == 'Informieren') {
            $getnextid = "Select cid, contenttype from content where  category = 'Erarbeiten' and parentcategory ='$parentcategory' and deleted='0' order by orderid asc";
            $lehrerdb->prepare($getnextid);
            $result = $lehrerdb->singleRecord();
            $nextid = $result->cid;
            $nextype = $result->contenttype;
        }
        if ($nextype == '' and $category == 'Erarbeiten') {
            $getnextid = "Select cid, contenttype from content where  category = 'Informieren' and parentcategory ='$parentcategory' and deleted='0' order by orderid asc";
            $lehrerdb->prepare($getnextid);
            $result = $lehrerdb->singleRecord();
            $nextid = $result->cid;
            $nextype = $result->contenttype;
        }
         $returnarray =(object)['nextcid'=>$nextid,'nextcontenttype'=>$nextype];
         return $returnarray;

    }elseif($state=='previouslesson'){
        $getprevious = "Select cid, contenttype from content where orderid  = (select max(orderid) from content where orderid < '$orderid' and category = '$category' and parentcategory ='$parentcategory' and deleted='0')";
        $lehrerdb->prepare($getprevious);
        $result = $lehrerdb->singleRecord();
        $pvid = @$result->cid;
        $pvtype = @$result->contenttype;
        if ($pvtype == "" and $category == "Informieren") {
            $getprevious = "Select cid, contenttype from content where  category = 'Erarbeiten' and parentcategory ='$parentcategory' and deleted='0' order by orderid asc";
            $lehrerdb->prepare($getprevious);
            $result = $lehrerdb->singleRecord();
            $pvid = $result->cid;
            $pvtype = $result->contenttype;
        }
        if ($pvtype == "" and $category == "Erarbeiten") {
            $getprevious = "Select cid, contenttype from content where  category = 'Informieren' and parentcategory ='$parentcategory' and deleted='0' order by orderid asc";
            $lehrerdb->prepare($getprevious);
            $result = $lehrerdb->singleRecord();
            $pvid = $result->cid;
            $pvtype = $result->contenttype;
        }
        $returnarray =(object)['previouscid'=>$pvid,'previouscontenttype'=>$pvtype];
        return $returnarray;
    }
    }
    public static function newlecturefromparent($parentcategory){
        global $lehrerdb;
        $getlecture="SELECT cid,contenttype FROM content WHERE parentcategory='$parentcategory' and category='Informieren' and deleted='0' order by orderid ASC LIMIT 1";
        $lehrerdb->prepare($getlecture);
        $result=$lehrerdb->singleRecord();

        $returnarray= (object)['cid'=>$result->cid,'contenttype'=>$result->contenttype];
        return $returnarray;
    }

}
