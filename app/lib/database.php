<?php 
 
class Database extends PDO{
    function __construct() {
        $host = "mysql:dbname=ourproject;host=127.0.0.1";
        $user = "root";
        $pw = "";
        try{
             parent::__construct($host, $user, $pw);         
        } catch (Exception $ex) {
            echo "Error : ".$ex->getMessage();
        }
    }
}


