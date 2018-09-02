<?php

class Booking extends tableDataObject{
    const TABLENAME= 'booking';


    public static function bookinglist($data){
        global $lehrerdb;
        $eventjson=array();
        if($data->role=='Mentee'){
            $getdata="SELECT * FROM booking where menteeuid='$data->menteeuid' and person_mentee <> '' ";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }elseif($data->role=='Mentor'){
            $getdata="SELECT * FROM booking where mentoruid='$data->mentoruid' and person_mentor <> '' ";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }elseif($data->role=='Mfc'){
            $getdata="SELECT * FROM booking where menteeuid='$data->menteeuid' ";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }

        foreach($result as $list){
            $date = $list->date;
	        $id = $list->bookingid;
	        $time = $list->time;

            $eventjson[] = array('start'=>$date.'T'.$time,'id'=>$id, 'icon'=>"calendar", 'color'=>'#155fa6');
        }

        return $eventjson;
    }

    public static function gettopbookedevents($data){
        global $lehrerdb;

       /* $getdata = "SELECT * FROM booking where menteeuid = '$uid' and date >= curdate() order by date limit 3";
        $lehrerdb->prepare($getdata);
        return $lehrerdb->resultSet();*/

        if($data->role=='Mentee'){
            $getdata="SELECT * FROM booking where menteeuid='$data->menteeuid' and person_mentee <> '' and date >= curdate() order by date limit 3 ";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }elseif($data->role=='Mentor'){
            $getdata="SELECT * FROM booking where mentoruid='$data->mentoruid' and person_mentor <> '' and date >= curdate() order by date limit 3";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }elseif($data->role=='Mfc'){
            $getdata="SELECT * FROM booking where menteeuid='$data->menteeuid' and date >= curdate() order by date limit 3 ";
            $lehrerdb->prepare($getdata);
            $result = $lehrerdb->resultSet();
        }
            return $result;
    }

    public static function gettopmentorbookedevents($uid){
        global $lehrerdb;

        $getdata = "SELECT * FROM booking where mentoruid = '$uid' and date >= curdate() order by date limit 3";
        $lehrerdb->prepare($getdata);
        return $lehrerdb->resultSet();
    }


    public static function geteventbyid($eventid){
        global $lehrerdb;

        $getdata="SELECT * FROM booking where bookingid = $eventid ";
        $lehrerdb->prepare($getdata);
        return  $lehrerdb->singleRecord();
    }

    public static function deletevent($bookingid){
        global $lehrerdb;
        $delq = "DELETE from booking where bookingid='$bookingid'";
        $lehrerdb->prepare($delq);
        $lehrerdb->execute();

    }
}