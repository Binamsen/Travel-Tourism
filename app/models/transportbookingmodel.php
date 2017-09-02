<?php

class TransportBooking extends Model{
    function __construct() {
        parent::__construct();
    }
    public function showtransportbookers(){
        $stmt=$this->db->prepare("select * from transportbookers");
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
    }
    public function addnewtransportbookers($uid,$members,$tid,$tname,$picture,$token,$date){
                $stmt= $this->db->prepare("INSERT INTO transportbookers (Booker_id,Number_of_members,TransID,TransportName,Image,token_id,Booked_For) VALUES ( :uid,:members,:tid,:tname,:picture,:token,:date)");
                         
                $stmt->bindParam(":uid",$uid);
                
                $stmt->bindParam(":members",$members);
                 $stmt->bindParam(":tid",$tid);
                 $stmt->bindParam(":tname",$tname);
                 $stmt->bindParam(":picture",$picture);
                 $stmt->bindParam(":date",$date);
                 $stmt->bindParam(":token",$token);
                
               
      
                $stmt->execute();
        }
        
        public function update($token) {
        $stmt = $this->db->prepare("UPDATE transportbookers SET Status= 0 WHERE token_id = :token");
         $stmt->bindParam(":token",$token);
        $stmt->execute();
    }
}
