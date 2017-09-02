<?php
class Subscribers extends Model{
    function __construct() {
        parent::__construct();
        }
        public function showSubscribers(){
            $stmt=$this->db->prepare("select * from subscribers");
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
            }
            public function addsubscribers($name, $age,$phone,$email,$password,$nationality){
                $stmt= $this->db->prepare("INSERT INTO subscribers (Name,Age,Phone,Email,Password,Nationality) VALUES (:name,:age,:phone,:email,:password,:nationality)");
                $stmt->bindParam(":name",$name);
                $stmt->bindParam(":age", $age);
                 $stmt->bindParam(":phone", $phone);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":password",$password);
                $stmt->bindParam(":nationality",$nationality);
                $stmt->execute();
        }
        public function getSubscriber($email){
            $stmt=$this->db->prepare("select * from subscribers where Email=:email");
            $stmt->bindParam(":email",$email);
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
        }
        
}


