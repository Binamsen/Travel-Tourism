<?php

class Booking extends Model{
    function __construct() {
        parent::__construct();
    }
    public function showbookers(){
        $stmt=$this->db->prepare("select * from bookers");
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
    }
    public function addnewbookers($uid,$members,$hid,$hname,$picture,$token,$date){
                $stmt= $this->db->prepare("INSERT INTO bookers (Booker_id,Number_of_members,Hid,Hotel_Name,Image,token_id,Booked_For) VALUES (:uid,:members,:hid,:hname,:picture, :token,:date)");
               
                $stmt->bindParam(":uid",$uid);
                $stmt->bindParam(":members",$members);
                 $stmt->bindParam(":hid",$hid);
                 $stmt->bindParam(":hname",$hname);
                 $stmt->bindParam(":picture",$picture);
                 $stmt->bindParam(":token",$token);
                  $stmt->bindParam(":date",$date);
                
               
      
                $stmt->execute();
        }
        
       
//        public function bookid(){
//        $stmt = $this->db->prepare("SELECT Booker_id FROM  bookers");
//        $stmt->execute();
//        $rs= $stmt->fetchAll();
//        return $rs;
//    }
    public function update($token) {
        $stmt = $this->db->prepare("UPDATE bookers SET Status= 0 WHERE token_id = :token");
         $stmt->bindParam(":token",$token);
        $stmt->execute();
    }
    
    
   
}



