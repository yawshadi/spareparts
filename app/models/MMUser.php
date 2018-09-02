<?php

class MMuser extends User{


   public function __construct( $objectid = null ) {

     parent::__construct();


    global $lehrerdb;
    if($objectid == null){
        $mrecords =  $lehrerdb->getColumns("users inner join menteeinformation on users.uid = menteeinformation.uid");
        $this->recordObject = new stdClass();
        foreach($mrecords->columns as $fieldname => $value){
        $this->recordObject->$fieldname = null;
        }
    }else{
        $getrecords = "SELECT users.*, menteeinformation.* from users inner join
        menteeinformation on users.uid = menteeinformation.uid where users.uid = $objectid ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        $this->recordObject =  $lehrerdb->singleRecord();
      }

   }

    public static function loginuser($email, $password){
        global $lehrerdb;
        $getcount = "SELECT count(*) as usercount from users where email = '$email' and password = '$password' ";
        $usercount = $lehrerdb->prepare($getcount);
        $usercount = $lehrerdb->fetchColumn();
        return  $usercount;
    }

    public static function getMenteeEmailCount($email){
        global $lehrerdb;
        $getcount = "SELECT count(*) as menteecount from users where email = '$email' ";
        $menteecount = $lehrerdb->prepare($getcount);
        $menteecount = $lehrerdb->fetchColumn();
        return  $menteecount;
    }

    public static function getuserbyemail($email){
        global $lehrerdb;
        $getrecords = "SELECT users.*, menteeinformation.* from users inner join
        menteeinformation on users.uid = menteeinformation.uid where users.email = '$email' ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->singleRecord();
    }

    public static function getmenteedataByRegId($registrationid){
        global $lehrerdb;
        $getrecords = "SELECT users.*, menteeinformation.* from users inner join
        menteeinformation on users.uid = menteeinformation.uid  where  menteeuniquid= '$registrationid' ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->singleRecord();
    }

    public static function getCountByRegId($registrationid){
        global $lehrerdb;
        $getcount  = "SELECT count(*) as usercount from users inner join menteeinformation on 
        users.uid = menteeinformation.uid where  menteeuniquid= '$registrationid' and (password is not null or password != '') ";
        $usercount = $lehrerdb->prepare($getcount);
        $usercount = $lehrerdb->fetchColumn();
        return  $usercount;
    }



    private static function getMenteeCount($uid){
     global $lehrerdb;
     $getrecords = "SELECT count(*) as ct from menteeinformation where uid = $uid ";
     $lehrerdb->prepare($getrecords);
     $lehrerdb->execute();
     return $lehrerdb->fetchColumn();
   }



   public  static function listAll($createObjects = false, $clausearray = NULL){
     global $lehrerdb;
     $getrecords = "SELECT users.*, menteeinformation.* from users inner join
     menteeinformation on users.uid = menteeinformation.uid ";
     $lehrerdb->prepare($getrecords);
     $lehrerdb->execute();
     return $lehrerdb->resultSet();
   }

   public function store($forcenulls = false){
     global $lehrerdb;
     $this->tableName = 'users';
     $this->primaryKey = 'uid';
     $uid = $this->recordObject->uid;
     $saveuser = parent::store();
     $userid = $saveuser->recordObject->uid;

     $nationality = $this->recordObject->nationality;
     $nationality2  =  $this->recordObject->nationality2;
     $schoolname = $this->recordObject->schoolname;
     $schoolform  = $this->recordObject->schoolform;
     $classroom = $this->recordObject->classroom;
     $graduationclass =  $this->recordObject->graduationclass;
     $doeseducationworkerknow = $this->recordObject->doeseducationworkerknow;
     $educationworkerfirstname = $this->recordObject->educationworkerfirstname;
     $educationworkerlastname = $this->recordObject->educationworkerlastname;
     $educationworkerhousenumber = $this->recordObject->educationworkerhousenumber;
     $educationworkertelephone = $this->recordObject->educationworkertelephone;
     $educationworkeremail = $this->recordObject->educationworkeremail;
     $educationworkerpostaladdress = $this->recordObject->educationworkerpostaladdress;
     $reasonforjoining = $this->recordObject->reasonforjoining;
     $hobby = $this->recordObject->hobby;
     $favoritesport = $this->recordObject->favoritesport;
     $menteeuniquid = $this->recordObject->menteeuniquid;
     $preamble = $this->recordObject->preamble;
     $videopath = $this->recordObject->videopath;
     $usertype = $this->recordObject->usertype;
     $employer = $this->recordObject->employer;
     $employerlocation = $this->recordObject->employerlocation;
     $graduation = $this->recordObject->graduation;
     $educationlevel = $this->recordObject->educationlevel;
     $apprenticeship = $this->recordObject->apprenticeship;
     $photocopyid = $this->recordObject->photocopyid;
     $additionalinfo = $this->recordObject->additionalinfo;
     $expectation = $this->recordObject->expectation;
     $referral = $this->recordObject->referral;
     $jobtitle  = $this->recordObject->jobtitle;

     $recordcount = self::getMenteeCount($userid);

     if($recordcount == 0 ){
     $insertquery = "INSERT INTO menteeinformation (
     nationality,
     nationality2,
     schoolname,
     schoolform,
     classroom,
     graduationclass,
     doeseducationworkerknow,
     educationworkerfirstname,
     educationworkerlastname,
     educationworkerhousenumber,
     educationworkertelephone,
     educationworkeremail,
     educationworkerpostaladdress,
     reasonforjoining,
     hobby,
     favoritesport,
     menteeuniquid,
     preamble,
     videopath,
     usertype,
     employer,
     employerlocation,
     graduation,
     educationlevel,
     apprenticeship,
     photocopyid,
     additionalinfo,
     expectation,
     referral,
     jobtitle,
     uid)
     values (
       '$nationality',
       '$nationality2',
       '$schoolname',
       '$schoolform',
       '$classroom',
       '$graduationclass',
       '$doeseducationworkerknow',
       '$educationworkerfirstname',
       '$educationworkerlastname',
       '$educationworkerhousenumber',
       '$educationworkertelephone',
       '$educationworkeremail',
       '$educationworkerpostaladdress',
       '$reasonforjoining',
       '$hobby',
       '$favoritesport',
       '$menteeuniquid',
       '$preamble',
       '$videopath',
       '$usertype',
       '$employer',
       '$employerlocation',
       '$graduation',
       '$educationlevel',
       '$apprenticeship',
       '$photocopyid',
       '$additionalinfo',
       '$expectation',
       '$referral',
       '$jobtitle',
        $userid
       ) ";
        $lehrerdb->prepare($insertquery);
        $lehrerdb->execute();
   }else{

     $updatequery = "UPDATE  menteeinformation SET
     nationality = '$nationality',
     nationality2= '$nationality2',
     schoolname = '$schoolname',
     schoolform = '$schoolform',
     classroom = '$classroom',
     graduationclass = '$graduationclass',
     doeseducationworkerknow = '$doeseducationworkerknow',
     educationworkerfirstname = '$educationworkerfirstname',
     educationworkerlastname =  '$educationworkerlastname',
     educationworkerhousenumber  = '$educationworkerhousenumber',
     educationworkertelephone = '$educationworkertelephone',
     educationworkeremail =  '$educationworkeremail',
     educationworkerpostaladdress = '$educationworkerpostaladdress',
     reasonforjoining = '$reasonforjoining',
     hobby = '$hobby',
     favoritesport= '$favoritesport',
     menteeuniquid= '$menteeuniquid',
     preamble= '$preamble',
     videopath= '$videopath',
     usertype= '$usertype',
     employer= '$employer',
     employerlocation = '$employerlocation',
     graduation = '$graduation',
     educationlevel  = '$educationlevel',
     apprenticeship = '$apprenticeship',
     photocopyid = '$photocopyid',
     additionalinfo = '$additionalinfo',
     expectation= '$expectation',
     referral = '$referral',
     jobtitle = '$jobtitle'
     where  uid = $userid ";
     $lehrerdb->prepare($updatequery);
     $lehrerdb->execute();
   }


   }



}


 ?>
