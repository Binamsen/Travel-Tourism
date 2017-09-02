<?php

class UserSignin extends Model{
   
    function __construct() {
        parent::__construct();
     
    }
    public function checkSignin($email,$password){
        $stmt = $this->db->prepare("SELECT Sid,Email,Password  FROM subscribers WHERE Email = :email AND Password=:password");
       
         $stmt->bindParam(':email', $email); 
         $stmt->bindParam(':password', $password);
         
         
        $stmt->execute();
        $rowCount= $stmt->rowCount(); 
        return $rowCount;
    }
 public function getUid($email){
        $stmt = $this->db->prepare("SELECT Sid FROM subscribers WHERE Email = :email");
         $stmt->bindParam(':email', $email); 
 
   $stmt->execute();
        $rs=$stmt->fetchAll();
             
            
    
        return $rs;
    }

}

