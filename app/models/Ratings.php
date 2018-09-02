<?php
class Ratings extends tableDataObject
{
    const TABLENAME = 'ratings';

    public static function completelecture($rating, $parentcategory, $category, $cid, $menteeuid)
    {
        global $lehrerdb;
        $getallcontent = "SELECT rateid from ratings where userid = '$menteeuid' and contentid='$cid'";
        $lehrerdb->prepare($getallcontent);
        $rateid = $lehrerdb->fetchColumn();

        if ($rateid == '') {
            $rateid = null;
        }
        $ratings = new Ratings($rateid);
        $rating_data = &$ratings->recordObject;
        $rating_data->userid = $menteeuid;
        $rating_data->contentid = $cid;
        $rating_data->ratecount = $rating;
        $rating_data->module = $parentcategory;
        $rating_data->parentcontent = $category;

        $ratings->store();

    }

    public static function dashboardprogress($parentcategory, $menteeuid)
    {
        global $lehrerdb;

        $getallarb = "SELECT cid from content  where parentcategory='$parentcategory' and deleted='0' and category <> 'Erarbeiten' ";
        $lehrerdb->prepare($getallarb);
        $lehrerdb->execute();
        $informieren_count = $lehrerdb->rowCount() + 2; //all informieren plus mandated 2 from erebeiten

        $informieren = "SELECT ratecount from ratings where userid ='$menteeuid' and module = '$parentcategory' and ratecount = '3' and parentcontent <> 'Erarbeiten' ";
        $lehrerdb->prepare($informieren);
        $lehrerdb->execute();
        $informieren_completed = $lehrerdb->rowCount(); //all completed informieren

        $erebeiten = "SELECT ratecount  from ratings where userid ='$menteeuid' and module = '$parentcategory' and ratecount = '3' and parentcontent='Erarbeiten' Limit 2 ";
        $lehrerdb->prepare($erebeiten);
        $lehrerdb->execute();
        $erebieten_completed = $lehrerdb->rowCount(); //total completed Erarbeiten limits  to 2

        $progress = (($informieren_completed + $erebieten_completed) / $informieren_count) * 100;

        return round($progress);

    }

    public static function progressaward($parentcategory, $menteeuid,$place=null)
    {
        global $lehrerdb;
        $first = "SELECT cid from content  where parentcategory='$parentcategory' and deleted='0'";
        $lehrerdb->prepare($first);
        $lehrerdb->execute();
        $firstcount = $lehrerdb->rowCount();
       
        $secound = "SELECT ratecount  from ratings where userid ='$menteeuid' and module = '$parentcategory' and ratecount = '3' ";
        $lehrerdb->prepare($secound);
        $lehrerdb->execute();
        $secondcount = $lehrerdb->rowCount();

        $erebeiten = "SELECT ratecount from ratings where userid='$menteeuid' and module='$parentcategory' and parentcontent='Erarbeiten'";
        $lehrerdb->prepare($erebeiten);
        $lehrerdb->execute();
        $ere_count = $lehrerdb->rowCount();

        $progress = ($secondcount / $firstcount) * 100;
        if(is_null($place)){
        if ($progress < 100 && $ere_count >= 4) {

            return "<span class='font-icon font-icon-award pie_progress__content' style='color:silver; font-size:25px !important;'></span>";

        } elseif ($progress < 100 && $ere_count >= 2) {

            return "<span class='fa fa-check pie_progress__content' style='color:green; font-size:25px !important;'></span>";

        } else {
            return "<span class='font-icon font-icon-award pie_progress__content' style='color:#f5cf14; font-size:25px !important;'></span>";
        }
     }else{
        if ($progress < 100 && $ere_count >= 4) {

            return " <span class='top'><img src=".URLROOT."ementoring/img/silverbadge.png></span>";

        } elseif ($progress < 100 && $ere_count >= 2) {

            return " <span class='top'><img src=".URLROOT."ementoring/img/correct.png></span>";

        } else {
            return " <span class='top'><img src=".URLROOT."ementoring/img/badge.png></span>";
        }
     }
    }

    public static function progresscolorchange($parentcategory, $menteeuid,$place=null)
    {
        global $lehrerdb;
        $first ="SELECT cid from content where parentcategory='$parentcategory' and deleted='0' and category <> 'Erarbeiten' ";
        $lehrerdb->prepare($first);
        $lehrerdb->execute();
        $firstcount = $lehrerdb->rowCount()+2; //total Informieren contents available + 2
      
        $secound = "SELECT ratecount from ratings where userid ='$menteeuid'and module = '$parentcategory' and ratecount = '3' and parentcontent <> 'Erarbeiten' ";
        $lehrerdb->prepare($secound);
        $lehrerdb->execute();
        $secondcount = $lehrerdb->rowCount(); // total completed Informieren
        
        $ere_ = "SELECT ratecount from ratings where userid ='$menteeuid'and module = '$parentcategory' and ratecount = '3' and parentcontent='Erarbeiten' Limit 2 ";
        $lehrerdb->prepare($ere_);
        $lehrerdb->execute();
        $ere_count = $lehrerdb->rowCount(); //total completed Erarbeiten limits  to 2

        $total_completed = $secondcount + $ere_count;

        $erebeiten = "SELECT ratecount from ratings where userid='$menteeuid' and module='$parentcategory' and parentcontent='Erarbeiten'";
        $lehrerdb->prepare($erebeiten);
        $lehrerdb->execute();
        $all_ere = $lehrerdb->rowCount();
       
        if(is_null($place)){
        if ($total_completed < $firstcount) {

            return '#155fa6';

        } elseif ($total_completed == $firstcount && $all_ere >= 4) {

            return '#C0C51F';

        } elseif ($total_completed == $firstcount && $all_ere >= 2) {

            return '';
        }
    }else{
        if($total_completed < $firstcount){
			
            return 'dprogress-circle';
            
            } elseif($total_completed == $firstcount && $all_ere >= 4){
               
            return 'dprogress-circle-2';
            
           } elseif($total_completed == $firstcount && $all_ere >= 2){
               
            return 'dprogress-circle-3';
            }
    }
    }
}
