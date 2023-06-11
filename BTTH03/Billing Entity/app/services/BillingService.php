<?php
// require_once('../libs/DBConnection.php');
require_once('../models/Billing.php');
class ArticleService{
    // Cac phuong thuc thao tac voi DB Server
    public static function getAllBillings(){
        // // Buoc 1: Ket noi DB Server
        // $dbConnection = new DBConnection();
        // $conn = $dbConnection->getConnection();
        // // $conn = DBConnection::getConnection();
        // // Buoc 2: Thuc hien truy van
        // $sql = "SELECT * FROM billing";
        // $stmt = $conn->query($sql);

        // // Buoc 3: Xu ly ket qua
        // $billings = [];
        // //Chuyen doi moi Ban ghi lay ra > Doi tuong: 
        // while($row=$stmt->fetch()){
        //     $billing = new Billing($row['id'],$row['Date'],$row['Total'],$row['Payment']);
        //     $billings[] = $billing;
        // }
        // return $billings;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=project01",'root','abc');

            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM billing";
            $stmt = $conn->query($sql);

            $billings = [];
            while($row=$stmt->fetch()){ 
                $billing = new Billing($row['id'],$row['Date'],$row['Total'],$row['Payment']);
                $billings[] = $billing;

            }   
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}