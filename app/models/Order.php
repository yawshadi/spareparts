<?php
/**
 * Created by PhpStorm.
 * User: getinnotized
 * Date: 3/24/2018
 * Time: 1:32 PM
 */
class Order extends tableDataObject{
    const TABLENAME= 'orders';


    public static function trainingmatusers($trainingid, $orderid, $userid){
        global $lehrerdb;
        $insertquery = "INSERT INTO order_training_user (trainingid, orderid, userid) values  ($trainingid, $orderid, $userid) ";
        $lehrerdb->prepare($insertquery);
        $lehrerdb->execute();
    }


    public static function getmaterials($trainingid,$userid){
        global $lehrerdb;
        $getquery="SELECT orders.*, materials.module FROM orders INNER JOIN  order_training_user INNER JOIN users INNER JOIN trainings INNER JOIN materials ON 
        orders.orderid = order_training_user.orderid and users.uid = order_training_user.userid  
        and trainings.trainingid=order_training_user.trainingid and orders.orderid= materials.orderid WHERE
	    trainings.trainingid = $trainingid and users.uid=$userid";
        $lehrerdb->prepare($getquery);
        $lehrerdb->execute();
        return $lehrerdb->resultSet();
    }

    public static function orderlist(){
        global $lehrerdb;
        /*
        so i created a view on the orderlist to allow for datatables pagination

        CREATE OR REPLACE VIEW orderlistview AS
        SELECT orders.orderid,orders.orderdate,orders.ordertype,orders.theme,orders.grade,orders.numberofclasses,orders.numberofstudents,
        orders.remarks,orders.orderstatus,orders.otherinformation,order_training_user.trainingid FROM orders INNER JOIN  order_training_user 
        ON orders.orderid = order_training_user.orderid ;
        */
        $getquery="SELECT orders.*,order_training_user.trainingid FROM orders INNER JOIN  order_training_user ON 
        orders.orderid = order_training_user.orderid ";
        $lehrerdb->prepare($getquery);
        $lehrerdb->execute();
        return $lehrerdb->resultSet();
    }

    public static function deleteorder($orderid)
    {
        global $lehrerdb;     
        $deletequery = "delete from order_training_user where orderid = $orderid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();  

        $deletequery = "delete from orders where orderid = $orderid ";
        $lehrerdb->prepare($deletequery);
        $lehrerdb->execute();
        
    }

    public static function mostpopular(){
        global $lehrerdb;
        $getquery = "SELECT MAX(ordertype) as mostpopular from orders ";
        $lehrerdb->prepare($getquery);
        return $lehrerdb->resultSet();
    }

    public static function studentcount(){
        global $lehrerdb;
        $getuser = " SELECT sum(numberofstudents) as total FROM orders INNER JOIN  order_training_user INNER JOIN trainings INNER JOIN users INNER JOIN materials ON 
        users.uid = order_training_user.userid  and trainings.trainingid = order_training_user.trainingid
        and orders.orderid=order_training_user.orderid and materials.orderid=order_training_user.orderid ";
        $lehrerdb->prepare($getuser);
        return $lehrerdb->resultSet();
       
    }


    public static function studentcountforthisyear(){
        global $lehrerdb;
        $year=date('Y');
        $getuser = " SELECT sum(numberofstudents) as total FROM orders INNER JOIN  order_training_user INNER JOIN trainings INNER JOIN users INNER JOIN materials ON 
        users.uid = order_training_user.userid  and trainings.trainingid = order_training_user.trainingid
        and orders.orderid=order_training_user.orderid and materials.orderid=order_training_user.orderid and YEAR(orders.orderdate)=$year";
        $lehrerdb->prepare($getuser);
        return $lehrerdb->resultSet();
       
    }




    public static function pivotdata($startdate,$endate,$limit){
        global $lehrerdb;
        $getuser = "SELECT orders.*,trainings.trainingid,trainings.trainingdate,trainings.organizer,users.*,materials.module FROM orders INNER JOIN  order_training_user INNER JOIN trainings INNER JOIN users INNER JOIN materials ON 
        users.uid = order_training_user.userid  and trainings.trainingid = order_training_user.trainingid
        and orders.orderid=order_training_user.orderid and materials.orderid=order_training_user.orderid WHERE trainings.trainingdate BETWEEN '$startdate' AND '$endate' limit $limit";
        $lehrerdb->prepare($getuser);
        return $lehrerdb->resultSet();
    }
}
