<?php

/**
 * Class Data
 */
class Data extends Controller{

    public function __construct(){
        /*
         * Because the parent(s) of this class - Controller and
         * BaseController - may have functionality that we definitely
         * want to inherit, we need to call the parent constructor...
         */
        parent::__construct();

        /*
         * The login function was not actually needed in this controller -
         * the actual login form in use is at pages/login.
         *
         * IMPORTANT: *if* we did need to allow for paths that should be exempted
         * from the guard here, there would be 2 ways to do it:
         *
         * 1. Check $_REQUEST['url'] for the the paths that should not be guarded, or
         * 2. Use backtrace to find out what method was called, against what should not
         *      be guarded.
         *
         * 1 is easy but brittle (if we move methods from one controller 2 another;
         * 2 is harder but could be useful as a base method in BaseController.
         *
         * We don't need to do either, so just putting the guard here.
         *
         */
       // $roles=['Administrator','My Mentor'];
        //new Guard($this->loggedInUser,$roles);
    }

    public function admindashboard(){
        $listofmodules = Modules::getorderedmodules();
        $this->view('admindashboard', $listofmodules);
    }

    public function taskappointment(){
        $this->view('taskappointment');
    }

   

    public function progress(){
        $menteelist=Menteeinformation::getcurrentclass('Mentee');
        $this->view('progress',$menteelist);
    }

    public function currentyear(){
        $menteelist=Menteeinformation::getcurrentclass('Mentee');

       // $mentorid=Menteeinformation::getassignedmentor('29254');
        //print_r($mentorid);
        $this->view('currentyear',$menteelist);
    }

    public function profileadmin(){
        $this->view('profileadmin');
    }


    public function menteedb(){
        $menteelist=Menteeinformation::getuserbytype('Mentee');
        $this->view('menteedb',$menteelist);
    }

    public function mentordb(){
        $mentorlist=Menteeinformation::getuserbytype('Mentor');
        $this->view('mentordb',$mentorlist);
    }

    public function admindb(){
        $adminlist=Menteeinformation::getuserbytype('Administrator', 'Super Administrator');
        $this->view('admindb', $adminlist);
    }

    public function deletedcontent(){
        $listofcontent = Modules::getmodulebyname('Arbeitsmethoden');
        $listofmodules = Modules::getmodulenames();
        $contentmodulesarray = array(
            "listofcontent" => $listofcontent,
            "listofmodules" => $listofmodules);
        $this->view('deletedcontent',  $contentmodulesarray);
    }

    public function testquestions(){
        $listoftest = TestStructure::getalltest();
        $uniquetesttuploadid = time();
        $questionlistarray = array(
            'listoftest'=>$listoftest,
            'uniquetestuploadid'=>$uniquetesttuploadid
        );
        $this->view('testquestions', $questionlistarray);
    }

 

    public function contentstructure(){
        $listofcontent = Modules::getmodulebyname('Arbeitsmethoden');
        $listofmodules = Modules::getmodulenames();
        $contentmodulesarray = array(
            "listofcontent" => $listofcontent,
            "listofmodules" => $listofmodules);
        $this->view('contentstructure', $contentmodulesarray);
    }


    public function listofmodules(){
        $this->view('listofmodules');
    }

    public function addcontent($categoryname, $mid){

        $modules=Modules::getmodulebyid($mid);
        $parentcategory=$modules->parent;
        $uniquecontentuploadid = time();
        $uniquementoruploadid = uniqid();
        $catparentandname = array(
          'categoryname'=>$categoryname,
          'parentcategory' => $parentcategory,
          "uniquecontentuploadid"=>$uniquecontentuploadid,
          "uniquementoruploadid"=>$uniquementoruploadid
        );
        

        $this->view('data/addcontent',$catparentandname);
    }

    public function editmodule($mid){
        
        $modules=Modules::getmodulebyid($mid);

        $this->view('data/editmodule',$modules);
    }

    public function editcontent($cid){
        
        $content=ContentStructure::getcontentbyid($cid);
        $randomnumber=$content->randomnumber;
        $documents=Documents::listdocuments('content',$randomnumber);
        $contentdata=array("content"=>$content,"documents"=>$documents);

        $this->view('data/editcontent',$contentdata);
    }

    public function edittest($testid){

        $test=TestStructure::gettestbyid($testid);
        $randomnumber=$test->randomnumber;
        $documents=Documents::listdocuments('testcms',$randomnumber);
        $testdata=array("test"=>$test,"documents"=>$documents);
        $this->view('data/edittest',$testdata);
    }

    public function changecontent($hash,$viewtype){
            $parent=Modules::returnparentmodule($hash);
            $listofcontent = Modules::getmodulebyname($parent);
            $contentmodulesarray = array(
            "hash" => $hash,
            "listofcontent" => $listofcontent); 
         if($viewtype=='deleted'){ $this->view('data/changedeletedcontent',$contentmodulesarray);} else{ $this->view('data/changecontent',$contentmodulesarray);}      
        
    }


    public function addtest($hash){
        $parent=Modules::returnparentmodule($hash);
            $uniquetesttuploadid = time();
            $questionlistarray = array(
                'parent'=>$parent,
                'uniquetestuploadid'=>$uniquetesttuploadid
            );
        $this->view('data/addtest',$questionlistarray);
    }




    public function importdatatomenteeinfo(){
        //choose what to import mentee or mentor
        $dbresult = Menteeinformation::basicinfo('Mentee');

        foreach($dbresult  as $get){

            $info = new User();
            $userdata =& $info->recordObject;
            $userdata->firstname = $get->firstname;
            $userdata->lastname = $get->surname;
            $userdata->gender = $get->gender;
            $userdata->location = $get->address;
            $userdata->email = $get->emailaddress;
            $userdata->postaladdress = $get->address;
           // $userdata->housenumber = $get->housenumber;
            $userdata->street = $get->housenumber;
            if($get->type=='Mentor' && $get->dateofbirth != ''){
                $newDate = date("Y", strtotime($get->dateofbirth));
           // $date = DateTime::createFromFormat("d-m-Y", $get->dateofbirth);
            $userdata->yearofbirth = $newDate;
            }
            if($get->type=='Mentee'){
                $newDate = date("Y-m-d", strtotime($get->dateofbirth));
                $userdata->dateofbirth = $newDate;
            }

            if($info->store()){
                $uid=$userdata->uid;
                if($get->type=='Mentee'){
                    $info->addRole('Mentee');
                }else if($get->type=='Mentor'){
                    $info->addRole('Mentor');
                }else{
                    $info->addRole('My Mentor');
                }

                if($get->educatorknowledge=='Yes'){
                    $educatorknowledge=1;
                }else{
                    $educatorknowledge=0;
                }
                $minfo = new Menteeinformation();
                $userdata =& $minfo->recordObject;
                $userdata->usertype = $get->type;
                $userdata->hobby = $get->hobbies;
                $userdata->nationality = $get->nationality;
                $userdata->nationality2 = $get->nationality2;
                $userdata->additionalinfo = $get->additionalinfo;
                $userdata->classroom = $get->class;
                $userdata->educationlevel = $get->graduationclass;
                $userdata->graduationclass = $get->graduationclass;
                $userdata->doeseducationworkerknow = $educatorknowledge;
                $userdata->educationworkerfirstname = $get->educatorfirstname;
                $userdata->educationworkerlastname = $get->educatorlastname;
                $userdata->educationworkeremail = $get->educatoremail;
                $userdata->educationworkertelephone = $get->educatortelephone;
                $userdata->educationworkerhousenumber = $get->educatorhousenumber;
                $userdata->educationworkerpostaladdress = $get->educatoraddress;
                $userdata->favoritesport = $get->sports;
                $userdata->schoolname = $get->school;
                $userdata->reasonforjoining = $get->programreason;
                $userdata->videopath = $get->videourl;
                $userdata->photocopyid = $get->photourl;
                $userdata->schoolform = $get->schoolform;
                $userdata->jobtitle = $get->jobtitle;
                $userdata->employer = $get->employer;
                $userdata->expectation = $get->expectation;
                $userdata->referral = $get->audience;
                $userdata->employerlocation = $get->employerlocation;
                $userdata->apprenticeship = $get->apprentice;
                $userdata->uid = $uid;
                $minfo->store();
            }


        }
    }

}



?>
