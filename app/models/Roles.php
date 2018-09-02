
<?php

/**
 * Class Roles
 */
class Roles extends tableDataObject{

      /**
       * @param $role
       *
       * @return mixed
       * @throws frameworkError
       */
      public static function userRoleId($role){
          global $lehrerdb;
          $getrole = "select roleid from roles where role  = '$role'  ";
          $rl = $lehrerdb->prepare($getrole);
          $roleid = $lehrerdb->fetchColumn();
          return $roleid;
    }

      /**
       * @param $roleid
       * @param $userid
       *
       * @throws frameworkError
       */
      public static function enterRoles($roleid, $userid){
            global $lehrerdb;
            $insertroles = "INSERT INTO user_roles (users_uid, roles_roleid) values ('$userid', '$roleid') ";
            $lehrerdb->prepare($insertroles);
            $lehrerdb->execute();
      }

  }


?>
