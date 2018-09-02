<?php
/**
 * This Model hadles all User Mangement
 * Creating Admin Users
 * Creating Customers Users
 * Resetting Password
 * Locking and Unlocking Accounts
 * Creating Secondar Accounts
 */

class User extends BaseUser
{

    // variables that may come from a form, or otherwise need to be available for user operations.
    public $new_password;


    /**
     * Provide a way to create a User Object from parameter
     *
     * updating this to use the TDO getRecordByParams method
     *
     * @param $param
     * @param $searchvalue
     *
     * @return bool|User
     * @throws frameworkError
     */
    public static function getUserByParam($param, $searchvalue)
    {
        $rowbyparam = parent::getRecordByParams(self::TABLENAME, array($param => $searchvalue));

        if ((!$rowbyparam) || count($rowbyparam) !== 1) {
            return false;
        } else {
            $userbyparam = new User($rowbyparam->uid);
            return $userbyparam;
        }

    }

    // FUNCTIONS DIRECTLY FROM USER MODEL; *MANY NEED CHANGES* - HERE TO COMPLETE UNIFICATION OF MODELS
    // ----------------------------------------------------------------------------------------------------

    /**
     * @param $password
     *
     * @return string
     */
    public static function passwordMD5($password){
        return md5($password);
    }

    /**
     * @param $email
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function checkUserExist($email){
        global $lehrerdb;
        $getusercount = "select count(*) as usercount from users where email  = '$email'  ";
        $count = $lehrerdb->prepare($getusercount);
        $usercount = $lehrerdb->fetchColumn();
        return $usercount;
    }


    /**
     * @param $role
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function allUsers($role){
        global $lehrerdb;
        $getuser = "select users.*, roles.role from users join
        user_roles on uid = users_uid join
        roles on roleid = roles_roleid where role <> '$role' and role <>'Mentee' and role <>'Mentor'  group by users.email";
        $lehrerdb->prepare($getuser);
        return $lehrerdb->resultSet();
    }

    public static function allmembers($role){
    /*
    i had to create a view to allow for datatable pagination
    CREATE OR REPLACE VIEW memberlistview AS
    select users.*, roles.role from users join
            user_roles on uid = users_uid join
            roles on roleid = roles_roleid where role = 'Participants';
    */
        global $lehrerdb;
        $getuser = "select users.*, roles.role from users join
        user_roles on uid = users_uid join
        roles on roleid = roles_roleid where role = '$role'";
        $lehrerdb->prepare($getuser);
        return $lehrerdb->resultSet();
    }

    /**
     * @param $role
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function userscount($role){
        global $lehrerdb;

        $getUqry = "select count(*) as total from users join
					user_roles on uid = users_uid join
					roles on roleid = roles_roleid where role = '$role' ";
        $lehrerdb->prepare($getUqry);
        return $lehrerdb->resultSet();
    }

    /**
     * @param $query
     * @param $request
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function searchUser($query,$request){
        global $lehrerdb;
        if($request=='search') {

            $getuser = "select * from users  where firstname like'$query%'";
            $lehrerdb->prepare($getuser);
            return $lehrerdb->resultSet();

        }elseif ($request=='populate'){
            $getuser = "SELECT institutions.*, users.* from institutions LEFT OUTER JOIN training_institutions
               on institutions.institutionid = training_institutions.institutionid LEFT OUTER JOIN users on training_institutions.uid=users.uid
               where users.uid ='$query'";
             $lehrerdb->prepare($getuser);
             $result= $lehrerdb->resultSet();
             if(sizeof($result)==0){
                $getuser = "select * from users  where uid ='$query'";
                $lehrerdb->prepare($getuser);
                return $lehrerdb->resultSet();
             }else{
                 return $result;
             }

        }
       
    }

    public static function trainingUsers($userid , $trainingid){
        global $lehrerdb;
        $insertquery = "INSERT INTO training_users (users_uid, trainingid) values  ($userid, $trainingid) ";
        $lehrerdb->prepare($insertquery);
        $lehrerdb->execute();
    }

    public static function getTrainingUsers($trainingid){
      global $lehrerdb;
      $query = "SELECT users.*,trainings.*,institutions.* FROM users INNER JOIN  training_institutions INNER JOIN trainings INNER JOIN institutions ON
users.uid = training_institutions.uid  and trainings.trainingid = training_institutions.trainingid
  and institutions.institutionid=training_institutions.institutionid WHERE trainings.trainingid = $trainingid GROUP BY users.uid";
      $lehrerdb->prepare($query);
      return $lehrerdb->resultSet();
    }

    public static function getPreviousMaterialData($trainingid,$userid){
        global $lehrerdb;
        $query="SELECT orders.*,trainings.trainingid,users.*,materials.module FROM orders INNER JOIN  order_training_user INNER JOIN trainings INNER JOIN users INNER JOIN materials ON
users.uid = order_training_user.userid  and trainings.trainingid = order_training_user.trainingid
  and orders.orderid=order_training_user.orderid and materials.orderid=order_training_user.orderid WHERE trainings.trainingid = $trainingid and users.uid=$userid";
        $lehrerdb->prepare($query);
       return $lehrerdb->resultSet();
    }


    public static function deleteTrainingUsers($userid, $trainingid){
        global $lehrerdb;
        $deletequery = "DELETE from training_users where trainingid = $trainingid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
    }


    public static function deleteTrainingUser($userid, $trainingid){
        global $lehrerdb;
        $deletequery = "DELETE from training_users where users_uid = $userid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

        $deletequery = "DELETE from training_institutions where uid = $userid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
    }

    public static function deleteuser($userid)
    {
        global $lehrerdb;

        $deletequery = "DELETE from training_users where users_uid = $userid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

        $deletequery = "delete from users where uid = $userid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

    }

    public static function newsrecipient(){
        global $lehrerdb;
        $getquery = "SELECT count(*) as total from users where subscribe_email=1";
        $lehrerdb->prepare($getquery);
        return $lehrerdb->resultSet();

    }
}
