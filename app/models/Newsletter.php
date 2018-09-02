<?php
/**
 * Created by PhpStorm.
 * User: getinnotized
 * Date: 4/30/2018
 * Time: 12:31 PM
 */

class Newsletter extends tableDataObject{
    const TABLENAME= 'newsletter';

    /**
     * @return mixed
     * @throws frameworkError
     */
    public static function openedletters(){
        global $lehrerdb;

        $getqry = "select count(*) as total from newsletter where openednewsletters='1' ";
        $lehrerdb->prepare($getqry);
        return $lehrerdb->resultSet();
    }

}
