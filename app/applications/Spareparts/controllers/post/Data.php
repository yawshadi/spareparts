<?php

class Data extends PostController
{

    public function admindashboard()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        if ($mode == 'edit') {
            $mid = $moduleid;
        } elseif ($mode == 'create') {
            $mid = null;
        } else {
            throw new frameworkError("POST to module method with no mode...");
        }

        if (!$modules = new Modules($mid)) {

        }

        $contentdate = date("Y-m-d");
        $mod = &$modules->recordObject;
        $mod->name = $modulename;
        $mod->parent = $parent;
        $mod->color = $modulecolor;
        $mod->description = $moduledescription;
        $mod->contentdate = $contentdate;
        $mod->mentordescription = $mentordescription;
        if ($modules->store()) {
            if ($mode != 'edit') {
                $mid = $mod->mid;
                $orderid = $mid + 1;
                $modules = new Modules($mid);
                $mod = &$modules->recordObject;
                $mod->orderid = $orderid;
                $modules->store();
            }
        }

        $listofmodules = Modules::getorderedmodules();
        $this->view('admindashboard', $listofmodules);
    }

    public function deletemodule()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        Modules::deletemodulebyid($mid);

    }

    public function deletecontent()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $contentid = $cid;
        ContentStructure::deletecontentbyid($contentid);

    }

    public function uploadfileforsummernote()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        /*
         * Let's use the existing service class to handle the business
         * with the upload.
         */
        $summerupload = new Uploads();
        $summerupload->filename = $_FILES['file'];
        $summerupload->target_dir = EMENTORINGUPLOAD . '/public/uploads';
        $uploadedFile = $summerupload->upLoadFile();

        echo ($uploadedFile['location']);
        // echo MYROOT;
        return true;

    }

    public function fileupload()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $name = $_FILES['Filedata']['name'];
        $type = $_FILES['Filedata']['type'];
        $size = $_FILES['Filedata']['size'];

        $docdate = date("Y-m-d");
        $uploads = new Uploads();
        $uploads->filename = $_FILES['Filedata'];
        $uploads->target_dir = EMENTORINGUPLOAD . '/public/uploads';
        $uploadresponse = $uploads->upLoadFile($filename);

        if ($uploadresponse['status'] == 'SUCCESS') {

            $newname = $uploadresponse['filename'];
            $docdata = new Documents();
            $doc = &$docdata->recordObject;
            $doc->newname = $newname;
            $doc->name = $name;
            $doc->type = $type;
            $doc->size = $size;
            if ($uploadtype == 'contentupload') {
                $doc->randomnumber = $uniquecontentuploadid;
            } else if ($uploadtype == 'mentorupload') {
                $doc->randomnumber = $uniquementoruploadid;
            } else if ($uploadtype == 'questionupload') {
                $doc->randomnumber = $uniquetestuploadid;
            }else if($uploadtype=='adhocupload'){
                $doc->randomnumber = $uniqueadhocuploadid;

            }
            $doc->docdate = $docdate;
            $docdata->store();
        } else {
            echo 'Error Uploading File';
        }

    }

    public function restorecontent()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $content = new ContentStructure($cid);
        $con = &$content->recordObject;
        $con->cid = $cid;
        $con->deleted = 0;
        $content->store();

    }

    public function addtestcontent()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        if ($mode == 'edit') {
            $testid = $testid;
        } elseif ($mode == 'create') {
            $testid = null;
        } else {
            throw new frameworkError("POST to Test method with no mode...");
        }

        if (!$testdata = new TestStructure($testid)) {

        }

        $test = &$testdata->recordObject;
        $test->category = $category;
        $test->testtype = $testtype;
        $test->preamble = $preamble;
        $test->answer = $answer;
        $test->mentordescription = $mentorsdesc;
        $test->answertype = $answertype;
        $test->randomnumber = $uniquetestuploadid;
        $test->choices = $choice;
        $test->parentorder = $parentorder;

        if ($testdata->store()) {
            if ($mode == 'create') {
                $testid = $test->testid;
                $orderid = $testid + 1;
                $testdata = new TestStructure($testid);
                $test = &$testdata->recordObject;
                $test->orderid = $orderid;
                $testdata->store();
            }
        }
        if($testtype='Multichoice' && $choice !=''){
        $choicearray = explode(',', $choice);
        $deletechoiches=Multichoice::deletemultichoice($testid);
        for($i=0; $i<count($choicearray); $i++){

            $choices = $choicearray[$i];
            $multi = new Multichoice();
            $multidata = &$multi->recordObject;
            $multidata->testid = $testid;
            $multidata->choice = $choices;
            $multi->store();
          }
        }
    }

    public function deletequestion()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $testid = $testid;
        TestStructure::deletequestionbyid($testid);

    }

    public function deletedocument()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        Documents::deletedocumentbyid($did);
        $documents = Documents::listdocuments($tablename, $randomnumber);
        $deleteddata = array("documents" => $documents, "tablename" => $tablename, "randomnumber" => $randomnumber);
        $this->view('data/documentlist', $deleteddata);

    }

    public function contentsort()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        if (is_numeric($next_cid)) {
            if ($accessKey == 'content') {
                $swap = ContentStructure::swapcontent($current_cid, $next_cid);
            } elseif ($accessKey == 'test') {
                $current_tesid = $current_cid;
                $next_testid = $next_cid;
                $swap = TestStructure::swapcontent($current_tesid, $next_testid);
            }
        }
    }
    public function mentordescription()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $parentcategory = Modules::returnparentmodule($hash);
        echo Modules::mentordescription($parentcategory);
    }
    public function assignmentor()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $assignment = Menteeinformation::assignmentor($mentee_uid, $mentor_uid);
    }

    public function assignmfc()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $assignment = Menteeinformation::assignmfc($mentee_uid, $mfc_uid);
    }

    public function deleteuser()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $userid = $cid;
        Menteeinformation::deleteuserbyid($userid);

    }

    public function sendemail()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $menteeuid = $menteeid;
        $mentoruid = $mentorid;
        $activated = 1;
        $menteedata = Menteeinformation::userinfo($menteeuid);
        $mentordata = Menteeinformation::userinfo($mentoruid);

        $firstname = $menteedata->firstname;
        $email = $menteedata->email;

        $mfirstname = $mentordata->firstname;
        $memail = $mentordata->email;

        $emailresponse = Emailmessage::sendmenteemail($firstname, $email);
        $emailresponse1 = Emailmessage::sendmentoremail($memail);

        echo $emailresponse;
        echo $emailresponse1;

        if ($emailresponse == "Success" || $emailresponse1 == "Success") {
            Menteeinformation::activate($menteeuid);
        } else {
            echo "Email not successful";
        }

    }

    public function addtocurrentyear()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $add = Menteeinformation::addtocurrentyear($uid);
    }

    public function removefromcurrentyear()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        Menteeinformation::removefromcurrentyear($uid);
    }
}
