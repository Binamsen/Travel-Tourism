<?php

class Destinations extends Model{
     function __construct() {
        parent::__construct();
     }
        public function increasecount($name) {
            $stmt=$this->db->prepare("update destinations set count = count+1 where UPPER(Name) = UPPER(:name)");
            $stmt->bindParam(":name",$name);
            $stmt->execute();
             $rowCount= $stmt->rowCount(); 
        return $rowCount;
        }
        public function getTopdestinations() {
            $stmt=$this->db->prepare("SELECT * FROM destinations ORDER BY count DESC LIMIT 3");
            $stmt->execute();
            $rs=$stmt->fetchAll();
             return $rs;
            
    
        
        }
        public function getplaces(){
            $stmt=$this->db->prepare("select * from destinations");
//            $stmt->bindParam(":name",$name);
            $stmt->execute();
            $rs=$stmt->fetchAll();
             return $rs;
        }
}


