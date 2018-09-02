<?php
/**
 * Created by PhpStorm.
 * User: getinnotized
 * Date: 3/24/2018
 * Time: 1:32 PM
 */
class Training extends tableDataObject{
    const TABLENAME= 'trainings';


    public static function trainingInstitutions($trainingid, $institutionid, $userid){
        global $lehrerdb;
        $insertquery = "INSERT INTO training_institutions (trainingid, institutionid, uid)
        values ($trainingid, $institutionid, $userid) ";
        $lehrerdb->prepare($insertquery);
        $lehrerdb->execute();
    }

    public static function deletetrainingInstitutions($trainingid, $institutionid, $userid){
        global $lehrerdb;
        $deletequery = "DELETE FROM training_institutions where trainingid=$trainingid
        and institutionid = $institutionid and uid = $userid) ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
     }

    public static function getRecordCounttrainingInstitutions($trainingid, $institutionid, $userid){
      global $lehrerdb;
      $getcount = "SELECT count(*) as trainingcount FROM training_institutions
      where trainingid=$trainingid  and institutionid = $institutionid and uid = $userid";
      $tcount = $lehrerdb->prepare($getcount);
      $tcount = $lehrerdb->fetchColumn();
      return   $tcount;


    }

    public static function Alltrainingusers(){
        global $lehrerdb;
        $query = "SELECT users.*,trainings.* FROM users INNER JOIN  training_users INNER JOIN trainings ON
                users.uid = training_users.users_uid  and trainings.trainingid = training_users.trainingid GROUP BY trainings.trainingid ORDER BY trainings.trainingdate DESC";
        $lehrerdb->prepare($query);
        return $lehrerdb->resultSet();
    }
    public static function teacherscount(){
        global $lehrerdb;
        $query = "SELECT count(uid) as total FROM users INNER JOIN  training_users INNER JOIN trainings ON
                users.uid = training_users.users_uid  and trainings.trainingid = training_users.trainingid";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        return $result[0]->total;
    }
    public  static function gettraining($trainingid){
        global $lehrerdb;
        $query = "SELECT * FROM trainings WHERE trainingid=$trainingid";
        $lehrerdb->prepare($query);
        return $lehrerdb->resultSet();
    }


    public static function trainingrecordsforthisyear(){
        global $lehrerdb;
        $year=date('Y');
        $lehrerdb->prepare("SELECT count(*) as recordcount FROM trainings WHERE  YEAR(trainings.trainingdate)=$year");
        $getcount = $lehrerdb->fetchColumn();
        return $getcount;
    }


    /*public static function teacherrecordsforthisyear(){
        global $lehrerdb;
        $year=date('Y');
        $query = "SELECT count(uid) as total FROM users INNER JOIN  training_users INNER JOIN trainings ON
                users.uid = training_users.users_uid  and trainings.trainingid = training_users.trainingid WHERE YEAR(trainings.trainingdate)=$year";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        return $result[0]->total;
    }*/

    public static function teacherrecordsforthisyear(){
        global $lehrerdb;
        $year=date('Y');
        $query = "SELECT trainings.*, training_institutions.* from trainings LEFT OUTER JOIN training_institutions
        on trainings.trainingid = training_institutions.trainingid where YEAR(trainings.trainingdate)=$year group by uid,trainings.trainingid";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        return sizeof($result);
    }


    public static function kpirecords($yearmonth,$filter){
        global $lehrerdb;
        $string=explode('-',$yearmonth);
        $year=$string[0];
        $month=$string[1];

        if($filter=='training'){

        $query="SELECT count(trainingid) as total FROM trainings 
        WHERE MONTH(trainingdate) = '$month' AND YEAR(trainingdate) = '$year'";
        $lehrerdb->prepare($query);
        $result= $lehrerdb->resultSet();
        return $result[0]->total;

        }else if($filter=='teachers'){

                /*$query="SELECT count(uid) as total FROM users INNER JOIN  training_users INNER JOIN trainings ON
                users.uid = training_users.users_uid  and trainings.trainingid = training_users.trainingid WHERE MONTH(trainings.trainingdate) = '$month' AND YEAR(trainings.trainingdate) = '$year'";
                $lehrerdb->prepare($query);
                $result= $lehrerdb->resultSet();
                return $result[0]->total;*/


                $query="SELECT trainings.*, training_institutions.* from trainings LEFT OUTER JOIN training_institutions
                on trainings.trainingid = training_institutions.trainingid where MONTH(trainings.trainingdate) = '$month' and YEAR(trainings.trainingdate)=$year group by uid,trainings.trainingid";
                $lehrerdb->prepare($query);
                $result= $lehrerdb->resultSet();
                return sizeof($result);

            }else if($filter='students'){

                $query="SELECT sum(numberofstudents) as total FROM orders INNER JOIN  order_training_user INNER JOIN trainings INNER JOIN users INNER JOIN materials ON 
                users.uid = order_training_user.userid  and trainings.trainingid = order_training_user.trainingid
                and orders.orderid=order_training_user.orderid and materials.orderid=order_training_user.orderid WHERE MONTH(orders.orderdate)='$month' AND YEAR(orders.orderdate)='$year'";
                $lehrerdb->prepare($query);
                $result= $lehrerdb->resultSet();
                return $result[0]->total;
            }

    }



    public static function deletetraining($trainingid)
    {
        global $lehrerdb; 
        
        $deletequery = "SET FOREIGN_KEY_CHECKS=0";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

        $deletequery = "delete from training_institutions where trainingid = $trainingid ";
        $lehrerdb->prepare($deletequery);
        if($lehrerdb->execute()){

        $deletequery = "delete from training_users where trainingid = $trainingid ";
        $lehrerdb->prepare($deletequery);
        if( $lehrerdb->execute()){

        $deletequery = "delete from trainings where trainingid = $trainingid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
       }
        }
       $deletequery = "SET FOREIGN_KEY_CHECKS=1";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();  
       
        

        
    }







}
