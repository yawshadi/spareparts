<?php
/**
 * Created by PhpStorm.
 * User: getinnotized
 * Date: 3/24/2018
 * Time: 1:32 PM
 */
class Institution extends tableDataObject{
    const TABLENAME= 'institutions';

    /*
     * Because we have data that we want to display as part of
     * an institution listing that comes from other tables,
     * we need to *override* the built-in constructor from
     * tableDataObject to fix up our records with this extra data.
     */
    /**
     * Institution constructor.
     *
     * @param null $objectid
     *
     * @throws frameworkError
     */
    public function __construct( $objectid = null ) {
        global $lehrerdb;

        /*
         * First, we go ahead and call the built-in constructor do to the work
         * of fetching (or creating!) our Institution object.
         */
        parent::__construct( $objectid );

        // This is simply for convenience, to save typing and make the code easier to read.
        $this->iid = $this->recordObject->institutionid;

        /*
         * If we are dealing with an existing school, we need to fetch the schooltype(s)
         * and add them to our record object.
         *
         * IMPORTANT: At this time, we are doing this in a way that keeps
         * compatibility with the existing views!
         *
         * TODO - right now this will return only 1 record even if the
         * institution has multiple types (which some do!). We will need to
         * deal with that.
         */
        if(isset($this->iid)){
            $getstQ = "SELECT
                            schooltype
                        FROM
                            institutions
                                LEFT JOIN
                            schooltype_institutions ON institutions.institutionid = schooltype_institutions.institutionid
                                JOIN
                            schooltype ON schooltype.schooltype_id = schooltype_institutions.schooltype_id
                        WHERE
                            schooltype_institutions.institutionid = $this->iid";
            $lehrerdb->prepare($getstQ);
            $schooltype = $lehrerdb->singleRecord();
            $this->recordObject->typeofschool = $schooltype;
        } else {
            /*
             * We have here a new Institution, so return null for the school type.
             * Later, when we fix the todo related to multiple types per instituion,
             * this should set the school type to an empty array, or something...
             */
            $this->recordObject->typeofschool = null;
        }
    }

    /*
     * To maintain compatibility with the existing institution list
     * view, we will override the default listAll() function from the
     * tableDataObject.
     *
     * NOTE: When overriding a function from a parent class, both the input
     * (parameters required by or given to the function) and the output (return)
     * are consistent with the original.
     */
    public static function listAll($createObjects = false, $clausearray = null)
    {
        global $lehrerdb;

         /*
        i had to create a view to allow for datatable pagination
        CREATE OR REPLACE VIEW institutionlistview AS			
	select institutions.*,schooltype.schooltype as typeofschool from institutions
                LEFT JOIN
            schooltype_institutions ON institutions.institutionid = schooltype_institutions.institutionid
                LEFT JOIN
            schooltype ON schooltype.schooltype_id = schooltype_institutions.schooltype_id
                WHERE
            nameofinstitution is not null and trim(nameofinstitution) != ''
                GROUP BY
            nameofinstitution,address,postcode,city,homepage,principal,hub,state,schoolnumber;;
    */

        /*
         * n the query below, note:
         *      schooltype.schooltype as typeofschool
         *
         * This is to maintain compatibility with code already written for the view.
         */
        $listWithSchoolTypesQ = "select institutions.*,schooltype.schooltype as typeofschool from institutions
                LEFT JOIN
            schooltype_institutions ON institutions.institutionid = schooltype_institutions.institutionid
                LEFT JOIN
            schooltype ON schooltype.schooltype_id = schooltype_institutions.schooltype_id
                WHERE
            nameofinstitution is not null and trim(nameofinstitution) != ''
                GROUP BY
            nameofinstitution,address,postcode,city,homepage,principal,hub,state,schoolnumber;";
        $lehrerdb->prepare($listWithSchoolTypesQ);
        $listWST = $lehrerdb->resultSet();
        return $listWST;

    }

    /*
     * The next method, setSchoolTypes() should be pretty self explanatory.
     * This function expects an array() of schooltype_id values. Even if you are
     * only setting ONE school type, you must pass it in as a single-element array.
     */
    /**
     * @param array $schooltypes
     *
     * @return bool
     * @throws frameworkError
     */
    public static function setSchoolTypes($schooltypes = array(),$iid){
        global $lehrerdb;

       // $iid = $this->recordObject->institutionid;

        $deleteExistingQ = "delete from schooltype_institutions where institutionid = $iid";
        $lehrerdb->prepare($deleteExistingQ);
        $lehrerdb->execute();

        foreach($schooltypes as $st){
            $insStQ = "insert into schooltype_institutions values($iid,$st)";
            $lehrerdb->prepare($insStQ);
            $lehrerdb->execute();
        }

        /*
         * It's good practice, but unfortunately not one we follow all the time
         * even in the libraries in the framework, to always return at least a
         * true or false, if not some specific value.
         */
        return true;
    }

    /*
     * As with the __construct method, when we override the store(),
     * we immediately first call the built-in method from the TDO,
     * and then do the extra work of storing any properties that we
     * need to.
     *
     * In this case, BEFORE calling store, you must set the property
     * on the recordObject, just as you would have set any property stored
     * directly in the institutions table. In this case, that property must
     * be an array of school type ids, as noted above.
     */
    /**
     * @param bool $forcenulls
     *
     * @return $this|bool
     * @throws frameworkError
     */
   /* public function store($forcenulls = false){
        parent::store();
        $this->setSchoolTypes($this->recordObject->schooltypes);
        return true;
    }
    */


    public static function searchSchool($query,$request)
    {
        global $lehrerdb;
        if($request=='search') {
            $getschool = "select * from institutions  where nameofinstitution like'$query%'";
        }elseif ($request=='populate'){
            $getschool = "select * from institutions  where institutionid ='$query'";
        }
        $lehrerdb->prepare($getschool);
        return $lehrerdb->resultSet();
    }

    public static function getInstitutionIdTrainingandUserId($trainingid,$userid)
    {
        global $lehrerdb;
        $getinsid = "select institutionid from training_institutions where trainingid = $trainingid and uid = $userid ";
        $insid = $lehrerdb->prepare($getinsid);
        $insid = $lehrerdb->fetchColumn();
        return $insid;
    }

    public static function deleteinstitution($institutionid)
    {
        global $lehrerdb;
        $deletequery = "delete from schooltype_institutions where institutionid = $institutionid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

        $deletequery = "delete from training_institutions where institutionid = $institutionid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();

        $deletequery = "delete from institutions where institutionid = $institutionid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
    }


    public static function getschooltypebyinstitutionid($institutionid){
            global $lehrerdb;
        
        $searchquery="select schooltype.* from schooltype join schooltype_institutions join institutions
        on schooltype.schooltype_id= schooltype_institutions. schooltype_id and institutions.institutionid=schooltype_institutions.institutionid WHERE schooltype_institutions.institutionid=$institutionid";

        $lehrerdb->prepare($searchquery);
        $schooltype = $lehrerdb->singleRecord();
        return $schooltype;
    }
}
