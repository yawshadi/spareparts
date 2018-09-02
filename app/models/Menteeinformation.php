<?php

class Menteeinformation extends tableDataObject
{

    const TABLENAME = 'menteeinformation';

    public static function getMenteeCount($email)
    {
        global $lehrerdb;
        $getcount = "SELECT count(*) as menteecount from menteeinformation where email = '$email' ";
        $menteecount = $lehrerdb->prepare($getcount);
        $menteecount = $lehrerdb->fetchColumn();
        return $menteecount;
    }

    public static function generateRandomString($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString.time();
    }

    public static function getmenteedataByRegId($registrationid)
    {
        global $lehrerdb;
        $getrecords = "SELECT * from menteeinformation where  menteeuniquid= '$registrationid' ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->singleRecord();
    }

    public static function getCountByRegId($registrationid)
    {
        global $lehrerdb;
        $getcount = "SELECT count(*) as usercount from menteeinformation where  menteeuniquid= '$registrationid'
      and (password is not null or password != '') ";
        $usercount = $lehrerdb->prepare($getcount);
        $usercount = $lehrerdb->fetchColumn();
        return $usercount;
    }

    public static function loginuser($email, $password)
    {
        global $lehrerdb;
        $getcount = "SELECT count(*) as usercount from menteeinformation where email = '$email' and password = '$password' ";
        $usercount = $lehrerdb->prepare($getcount);
        $usercount = $lehrerdb->fetchColumn();
        return $usercount;
    }

    public static function getuserbyemail($email)
    {
        global $lehrerdb;
        $getrecords = "SELECT * from menteeinformation where  email= '$email'  ";
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->singleRecord();
    }

    public static function getuserbytype($usertype)
    {
        global $lehrerdb;
        $getusers = "SELECT * from menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.usertype like '%$usertype%' ";
        $userstype = $lehrerdb->prepare($getusers);
        $userstype = $lehrerdb->resultSet();
        return $userstype;
    }

    public static function getcurrentclass($usertype)
    {
        global $lehrerdb;
        $getusers = "SELECT * from menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.usertype like '%$usertype%' and currentclass=1 ";
        $userstype = $lehrerdb->prepare($getusers);
        $userstype = $lehrerdb->resultSet();
        return $userstype;
    }

    public static function deleteuserbyemail($email)
    {
        global $lehrerdb;
        $delq = "DELETE from menteeinformation where email='$email'";
        $lehrerdb->prepare($delq);
        if ($lehrerdb->execute()) {
            return 'succesfully deleted';
        } else {
            return 'error deleting data';
        }

    }

    public static function deleteuserbyid($uid)
    {
        global $lehrerdb;
        $delq = "DELETE from menteeinformation where uid='$uid'";
        $lehrerdb->prepare($delq);
        if ($lehrerdb->execute()) {
            $deluser = "DELETE from users where uid='$uid'";
            $lehrerdb->prepare($deluser);
            if ($lehrerdb->execute()) {
                return 'succesfully deleted';
            }
        } else {
            return 'error deleting data';
        }

    }

    public static function deleteallusers()
    {
        global $lehrerdb;
        $delq = "DELETE from menteeinformation";
        $lehrerdb->prepare($delq);
        if ($lehrerdb->execute()) {
            return 'succesfully deleted';
        } else {
            return 'error deleting data';
        }

    }

    public static function getmodulesdisplay($uid)
    {
        global $lehrerdb;
        $getmodules = "Select DISTINCT parent, parentorder from modules order by parentorder asc ";
        $lehrerdb->prepare($getmodules);
        $modules = $lehrerdb->resultSet();

        foreach ($modules as $module) {

            $modulename = $module->parent;

            $getassignedmodule = "Select count(*) as usercount from modulass where uid = '$uid' and modulename = '$modulename' ";
            $lehrerdb->prepare($getassignedmodule);
            $count = $lehrerdb->fetchColumn();

            if ($count == 0) {$status = 'checked';} else { $status = 'unchecked';}
            echo '<input type="checkbox" ' . $status . ' class="modulechk"
        i_index=' . $uid . ' value=' . $module->parent . '>' . ' ' . $modulename . '<br/>';

        }

    }

    public static function getassignedmentor($uid)
    {
        global $lehrerdb;
        $getmentorid = "Select mentee_mentor_mfc.mentor_uid from mentee_mentor_mfc inner join menteeinformation on menteeinformation.uid=mentee_mentor_mfc.mentee_uid
        where menteeinformation.uid=$uid";
        $lehrerdb->prepare($getmentorid);
        $mentorid = $lehrerdb->fetchColumn();
        if ($mentorid != '') {
            $getmentor = "select * from menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.uid=$mentorid";
            $lehrerdb->prepare($getmentor);

            return $lehrerdb->singleRecord();
        }
    }

    public static function getassignedmentee($uid)
    {
        global $lehrerdb;
        $getmenteeid = "Select mentee_mentor_mfc.mentee_uid from mentee_mentor_mfc inner join menteeinformation on menteeinformation.uid=mentee_mentor_mfc.mentor_uid
        where menteeinformation.uid=$uid";
        $lehrerdb->prepare($getmenteeid);
        $menteeid = $lehrerdb->fetchColumn();
        if ($menteeid != '') {
            $getmentee = "select * from menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.uid=$menteeid";
            $lehrerdb->prepare($getmentee);

            return $lehrerdb->singleRecord();
        }
    }

    public static function getassignedmfc($uid)
    {
        global $lehrerdb;
        $getmfcid = "Select mentee_mentor_mfc.mfc_uid from mentee_mentor_mfc inner join users on users.uid=mentee_mentor_mfc.mentee_uid or  users.uid=mentee_mentor_mfc.mentor_uid
            where users.uid=$uid";
        $lehrerdb->prepare($getmfcid);
        $mfcid = $lehrerdb->fetchColumn();
        if ($mfcid != '') {
            $getmfc = "select * from users where uid=$mfcid";
            $lehrerdb->prepare($getmfc);

            return $lehrerdb->singleRecord();
        }
    }

    public static function unassignedmentors()
    {
        global $lehrerdb;
        $getunassigned = "SELECT * FROM menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.usertype='Mentor' and menteeinformation.assigned=0";
        $lehrerdb->prepare($getunassigned);
        $unassigned = $lehrerdb->resultSet();
        foreach ($unassigned as $mentorlist) {
            echo " <option value='$mentorlist->uid'>$mentorlist->firstname  $mentorlist->lastname</option> ";
        }
    }
    public static function unassignedmfcs()
    {
        global $lehrerdb;
        $getunassigned = "select * from users join user_roles on users.uid = user_roles.users_uid join roles on roles.roleid = user_roles.roles_roleid where
        roles.role='My Mentor'";
        $lehrerdb->prepare($getunassigned);
        $unassigned = $lehrerdb->resultSet();
        foreach ($unassigned as $mfclist) {
            echo " <option value='$mfclist->uid'>$mfclist->firstname  $mfclist->lastname</option> ";
        }
    }

    public static function assignmentor($mentee_uid, $mentor_uid)
    {
        global $lehrerdb;
        $getcount = "SELECT count(*) as menteecount from mentee_mentor_mfc where mentee_uid = '$mentee_uid' ";
        $menteecount = $lehrerdb->prepare($getcount);
        $menteecount = $lehrerdb->fetchColumn();
        self::show($menteecount);
        if ($menteecount == 0) {
            // create a fresh assignment of mentee and mentor
            $insertassignment = "INSERT INTO mentee_mentor_mfc(mentee_uid,mentor_uid) VALUES('$mentee_uid','$mentor_uid')";
            $lehrerdb->prepare($insertassignment);
            $lehrerdb->execute();

            //change the mentors assignment to one
            $updateassignment = "UPDATE menteeinformation SET assigned=1 WHERE uid='$mentor_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();

            //change the mentees assigment to one
            $updateassignment = "UPDATE menteeinformation SET assigned=1 WHERE uid='$mentee_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();
        } else {

            // get the mentor already assigned
            $getalreadyassignmedmentor = "SELECT mentor_uid FROM mentee_mentor_mfc where mentee_uid='$mentee_uid'";
            $lehrerdb->prepare($getalreadyassignmedmentor);
            $oldmentor_uid = $lehrerdb->fetchColumn();

            //change his assignment to zero
            $updateassignment = "UPDATE menteeinformation SET assigned=0 WHERE uid='$oldmentor_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();

            //assign a new mentor to this mentee
            $updateassignment = "UPDATE mentee_mentor_mfc SET mentor_uid='$mentor_uid' WHERE mentee_uid='$mentee_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();

            //change the mentors assignment to one
            $updateassignment = "UPDATE menteeinformation SET assigned=1 WHERE uid='$mentor_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();

            //change the mentees assigment to one
            $updateassignment = "UPDATE menteeinformation SET assigned=1 WHERE uid='$mentee_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();
        }

        $getchannel = "SELECT channel_id from channelcode where user_id='$mentee_uid'";
        $lehrerdb->prepare($getchannel);
        $result = $lehrerdb->fetchColumn();
        if ($result !='') {
            $channelcode = $result;
            $verify = "SELECT * from channelcode where type='Mentor' and channel_id='$channelcode'";
            $lehrerdb->prepare($verify);
            $lehrerdb->execute();
            $row=$lehrerdb->rowCount();
            if ($row > 0) {
                $update = "UPDATE channelcode set user_id='$mentor_uid' where channel_id='$channelcode' and type='Mentor'";
                $lehrerdb->prepare($update);
                $lehrerdb->execute();
            }
        } else {
            $channelcode= self::generateRandomString();
                $channel= new Channel();
                $channeldata= & $channel->recordObject;
                $channeldata->user_id=$mentee_uid;
                $channeldata->channel_id=$channelcode;
                $channeldata->type='Mentee';
               if( $channel->store()){
                $channel= new Channel();
                $channeldata= & $channel->recordObject;
                $channeldata->user_id=$mentor_uid;
                $channeldata->channel_id=$channelcode;
                $channeldata->type='Mentor';
                $channel->store();
               }
        
        }

    }

    public static function assignmfc($mentee_uid, $mfc_uid)
    {
        global $lehrerdb;
        $getcount = "SELECT count(*) as menteecount from mentee_mentor_mfc where mentee_uid = '$mentee_uid' ";
        $menteecount = $lehrerdb->prepare($getcount);
        $menteecount = $lehrerdb->fetchColumn();
        self::show($menteecount);
        if ($menteecount == 0) {
            // create a fresh assignment of mentee and mfc
            $insertassignment = "INSERT INTO mentee_mentor_mfc(mentee_uid,mfc_uid) VALUES('$mentee_uid','$mfc_uid')";
            $lehrerdb->prepare($insertassignment);
            $lehrerdb->execute();

        } else {

            //assign a new mfc to this mentee
            $updateassignment = "UPDATE mentee_mentor_mfc SET mfc_uid='$mfc_uid' WHERE mentee_uid='$mentee_uid'";
            $lehrerdb->prepare($updateassignment);
            $lehrerdb->execute();
        }

        $getchannel = "SELECT channel_id from channelcode where user_id='$mentee_uid'";
        $lehrerdb->prepare($getchannel);
        $result = $lehrerdb->fetchColumn();
        if ($result !='') {
            $channelcode = $result;
            $verify = "SELECT * from channelcode where type='Mfc' and channel_id='$channelcode'";
            $lehrerdb->prepare($verify);
            $lehrerdb->execute();
            $row=$lehrerdb->rowCount();
            if($row > 0){
                $update = "UPDATE channelcode set user_id='$mfc_uid' where channel_id='$channelcode' and type='Mfc'";
                $lehrerdb->prepare($update);
                $lehrerdb->execute();
            }else{
                $channel= new Channel();
                $channeldata= & $channel->recordObject;
                $channeldata->user_id=$mfc_uid;
                $channeldata->channel_id=$channelcode;
                $channeldata->type='Mfc';
                $channel->store();
            }
            
        }
    }

    public static function basicinfo($usetype)
    {

        global $lehrerdb;
        if ($usetype == 'Mentee') {
            $getrecords = "select * from basicinformation join educator on basicinformation.basic_id=educator.basic_id ";
        } else {
            $getrecords = "select * from basicinformation where type <> 'Mentee'";
        }
        $lehrerdb->prepare($getrecords);
        $lehrerdb->execute();
        return $lehrerdb->resultSet();
    }

    public static function show($var)
    {
        print_r($var);
    }

    public static function userinfo($uid)
    {
        global $lehrerdb;
        $getuserinfo = "SELECT * FROM menteeinformation join users on menteeinformation.uid=users.uid where menteeinformation.uid = '$uid'";
        $lehrerdb->prepare($getuserinfo);
        return $lehrerdb->singleRecord();
    }

    public static function activate($uid)
    {
        global $lehrerdb;
        $getuserinfo = "UPDATE menteeinformation set activated=1 where uid='$uid'";
        $lehrerdb->prepare($getuserinfo);
        $lehrerdb->execute();
    }
    public static function addtocurrentyear($uid)
    {
        global $lehrerdb;
        $getuserinfo = "UPDATE menteeinformation set currentclass=1 where uid='$uid'";
        $lehrerdb->prepare($getuserinfo);
        $lehrerdb->execute();

    }

    public static function removefromcurrentyear($uid)
    {
        global $lehrerdb;
        $getuserinfo = "UPDATE menteeinformation set currentclass=0 where uid='$uid'";
        $lehrerdb->prepare($getuserinfo);
        $lehrerdb->execute();

    }

    public static function getcompletedcourses($category, $parent, $uid, $page)
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
        if ($page == 'dashboard') {

            return $coursecompleted . '/' . $coursecount;

        } else {
            $progress = ($coursecompleted / $coursecount) * 100;
            $description = $coursecompleted . ' von ' . $coursecount . ' Aufgaben abgeschlossen ';

            $returnarray = array("progress" => $progress, "description" => $description);

            return $returnarray;
        }
    }
    public static function overallcompletion($uid)
    {
        global $lehrerdb;

        $getcount = "SELECT count(*) as total from content where  deleted='0'";
        $coursecount = $lehrerdb->prepare($getcount);
        $coursecount = $lehrerdb->fetchColumn();

        $getcompleted = "SELECT  count(ratecount) as total from ratings where userid='$uid' and ratecount=3";
        $coursecompleted = $lehrerdb->prepare($getcompleted);
        $coursecompleted = $lehrerdb->fetchColumn();

        $progress = ($coursecompleted / $coursecount) * 100;
        $description = $coursecompleted . ' von ' . $coursecount . ' Aufgaben abgeschlossen ';

        $returnarray = array("progress" => $progress, "description" => $description);
        return $returnarray;
    }

    public static function rateimages($cid, $uid)
    {
        global $lehrerdb;
        $getrate = "Select ratecount from ratings where userid = '$uid' and contentid = '$cid' ";
        $rateimge = $lehrerdb->prepare($getrate);
        return $lehrerdb->fetchColumn();
    }

    public static function userproperties()
    {
        global $lehrerdb;

        if (isset($_SESSION['userid'])) {
            
            $uid = $_SESSION['userid'];
            $user = new User($uid);
            $role = $user->listRoles();
            if (in_array('Mentee', $role)) {
                $role = 'Mentee';

                $menteedata = self::userinfo($uid);
                $menteename = $menteedata->firstname . ' ' . $menteedata->lastname;
                $menteeuid = $menteedata->uid;
                $menteevideo=$menteedata->videopath;

                $mentordata = self::getassignedmentor($uid);
                $mentorname = $mentordata->firstname . ' ' . $mentordata->lastname;
                $mentoruid = $mentordata->uid;
                $mentorvideo=$mentordata->videopath;

                $mfcdata = self::getassignedmfc($uid);
                $mfcname = $mfcdata->firstname . ' ' . $mfcdata->lastname;
                $mfcuid = $mfcdata->uid;

                $returnarray = (object) ['menteename' => $menteename, 'menteeuid' => $menteeuid, 'role' => $role,'menteevideo'=>$menteevideo,'mentorvideo'=>$mentorvideo, 'mentorname' => $mentorname, 'mentoruid' => $mentoruid, 'mfcname' => $mfcname, 'mfcuid' => $mfcuid];

                return $returnarray;

            } elseif (in_array('Mentor', $role)) {

                $role = 'Mentor';

                $menteedata = self::getassignedmentee($uid);
                $menteename = $menteedata->firstname . ' ' . $menteedata->lastname;
                $menteeuid = $menteedata->uid;
                $menteevideo=$menteedata->videopath;

                $mentordata = self::userinfo($uid);
                $mentorname = $mentordata->firstname . ' ' . $mentordata->lastname;
                $mentoruid = $mentordata->uid;
                $mentorvideo=$mentordata->videopath;

                $mfcdata = self::getassignedmfc($uid);
                $mfcname = $mfcdata->firstname . ' ' . $mfcdata->lastname;
                $mfcuid = $mfcdata->uid;

                $returnarray = (object) ['menteename' => $menteename, 'menteeuid' => $menteeuid, 'role' => $role,'menteevideo'=>$menteevideo,'mentorvideo'=>$mentorvideo, 'mentorname' => $mentorname, 'mentoruid' => $mentoruid, 'mfcname' => $mfcname, 'mfcuid' => $mfcuid];

                return $returnarray;

            } elseif (in_array('My Mentor', $role) || in_array('Administrator',$role) || in_array('Super Admininstrator',$role)) {

                $role = 'Mfc';
                $mentee_uid=Mfcdashboard::check()->menteeuid;
                $menteedata = self::userinfo($mentee_uid);
                if (is_object($menteedata)) {
                    $menteename = $menteedata->firstname . ' ' . $menteedata->lastname;
                    $menteeuid = $menteedata->uid;
                    $menteevideo=$menteedata->videopath;
                }

                $mentordata = self::getassignedmentor($mentee_uid);
                if (is_object($mentordata)) {
                    $mentorname = $mentordata->firstname . ' ' . $mentordata->lastname;
                    $mentoruid = $mentordata->uid;
                    $mentorvideo=$mentordata->videopath;
                }

                $mfcdata = self::getassignedmfc($mentee_uid);
                if (is_object($mfcdata)) {
                    $mfcname = $mfcdata->firstname . ' ' . $mfcdata->lastname;
                    $mfcuid = $mfcdata->uid;
                }

                $returnarray = (object) ['menteename' => $menteename, 'menteeuid' => $menteeuid, 'role' => $role,'menteevideo'=>$menteevideo,'mentorvideo'=>$mentorvideo, 'mentorname' => $mentorname, 'mentoruid' => $mentoruid, 'mfcname' => $mfcname, 'mfcuid' => $mfcuid];

                return $returnarray;
            }else{
                throw new frameworkError("Sorry the role for this user did not return any match");
            }
        } else {
            return null;
        }
    }
}
