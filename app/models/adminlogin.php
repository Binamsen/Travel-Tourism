<?php

class AdminLogin extends Model{
    function __construct() {
        parent::__construct();
     
    }
    public function checkLogin($username, $password){
        $stmt = $this->db->prepare("SELECT username, password FROM admin WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $rowCount= $stmt->rowCount(); 
        return $rowCount;
    }



    }


