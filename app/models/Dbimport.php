<?php

/**
 * Class Dbimport
 */
class Dbimport extends tableDataObject{

    /**
     * @return mixed
     * @throws frameworkError
     */
    public static function schooltype (){
         global $lehrerdb;
         $getrecords = "select distinct schooltype from dummyschool where schooltype IS NOT NULL";
         $lehrerdb->prepare($getrecords);
         $lehrerdb->execute();
         return $lehrerdb->resultSet();
     }

    /**
     * @param $tnid
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function getSchooltype($tnid){

       global $lehrerdb;
       $getrecord = "select schooltype from dummyschool where tnid = '$tnid' ";
       $lehrerdb->prepare($getrecord);
       $schooltype = $lehrerdb->fetchColumn();
       return $schooltype;

     }

    /**
     * @param $schooltype
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function getSchoolid($schooltype){

       global $lehrerdb;
       $getrecord = "select schooltype_id from schooltype where schooltype = '$schooltype' ";
       $lehrerdb->prepare($getrecord);
       $schoolid = $lehrerdb->fetchColumn();
       return $schoolid;

     }

     public static function deleteschool(){
       global $lehrerdb;
       $getrecords = "delete from schooltype";
       $lehrerdb->prepare($getrecords);
       $lehrerdb->execute();
     }

    /**
     * @param $institutionid
     * @param $schooltypeid
     *
     * @throws frameworkError
     */
    public static function insert_school_institution($institutionid, $schooltypeid){
     global  $lehrerdb;
     $query = "INSERT INTO schooltype_institutions (institutionid, schooltype_id)  values ($institutionid, $schooltypeid) ";
     $lehrerdb->prepare($query);
     $lehrerdb->execute();
     }

    /**
     * @param $userid
     * @param $roleid
     *
     * @throws frameworkError
     */
    public static function insert_user_roles($userid, $roleid){
     global  $lehrerdb;
     $query = "INSERT INTO user_roles (users_uid, roles_roleid)  values ($userid, $roleid) ";
     $lehrerdb->prepare($query);
     $lehrerdb->execute();
     }


     public static function get_order_training_lookup(){
        global $lehrerdb;
        $getrecords = "select * from order_training_user_lookup ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->resultSet();
      }


     public static function gettrainingid($trainigid){
      global  $lehrerdb;
      $query = "Select trainingid from trainings where originalid = '$trainigid' ";
      $lehrerdb->prepare($query);
      $trainingid = $lehrerdb->fetchColumn();
      return $trainingid;
      }

       public static function getorderid($orderid){
       global  $lehrerdb;
       $query = "Select orderid from orders where originalid = '$orderid' ";
       $lehrerdb->prepare($query);
       $orderid = $lehrerdb->fetchColumn();
       return $orderid;
       }

       public static function getuserid($userid){
       global  $lehrerdb;
       $query = "Select uid from users where originalid = '$userid'  ";
       $lehrerdb->prepare($query);
       $userid = $lehrerdb->fetchColumn();
       return $userid;
       }

       public static function insert_order_training_user($orderid, $trainingid, $userid){
        global  $lehrerdb;
        $query = "INSERT INTO  order_training_user (orderid, trainingid, userid)  values ('$orderid', '$trainingid', '$userid') ";
        $lehrerdb->prepare($query);
        $lehrerdb->execute();
        }

        public static function  school_lookup(){
          global $lehrerdb;
          $getrecords = "select * from school_lookup ";
          $lehrerdb->prepare($getrecords);
          $lehrerdb->execute();
          return $lehrerdb->resultSet();
        }

        public static function  sch_lookup(){
          global $lehrerdb;
          $getrecords = "select * from sch_lookup ";
          $lehrerdb->prepare($getrecords);
          $lehrerdb->execute();
          return $lehrerdb->resultSet();
        }


        public static function getSchoolbynumber($schno){
           global $lehrerdb;
           $getrecord = "select count(*) as ct  from Institutions where schoolnumber = '$schno' ";
           $lehrerdb->prepare($getrecord);
           $schooltype = $lehrerdb->fetchColumn();
           return $schooltype;
         }

         public static function getSchoolcount($schoolid){
            global $lehrerdb;
            $getrecord = "select count(*) as ct  from schooltype_institutions where institutionid = $schoolid ";
            $lehrerdb->prepare($getrecord);
            $schooltype = $lehrerdb->fetchColumn();
            return $schooltype;
          }

         public static function getschooltypeidnyname($schtype){

            global $lehrerdb;
            $getrecord = "select schooltype_id  from schooltype  where schooltype = '$schtype' ";
            $lehrerdb->prepare($getrecord);
            $schooltype = $lehrerdb->fetchColumn();
            return $schooltype;

          }

          public static function getinstitutionIbBySchoolnuber($schno){

             global $lehrerdb;
             $getrecord = "select institutionid  from institutions  where schoolnumber = '$schno' ";
             $lehrerdb->prepare($getrecord);
             $schooltype = $lehrerdb->fetchColumn();
             return $schooltype;

           }


}


?>
