<?php
 
class Packages extends Model{
     function __construct() {
        parent::__construct();
        }
        
        public function showpackages(){
            $stmt = $this->db->prepare("select * from packages");
             $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
        }
        
         public function showpackage($hid){
            $stmt = $this->db->prepare("select * from packages where Hid=:hid");
             $stmt->bindParam(":hid", $hid);
             $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
        }
        public function getpackage($pakid){
            $stmt = $this->db->prepare("SELECT * FROM  packages WHERE Package_id = :pakid ");
        $stmt->bindParam(":pakid", $pakid);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
        }

                public function deletepackage($pakid){
            $stmt=$this->db->prepare("DELETE FROM packages WHERE Package_id = :pakid");
         $stmt->bindParam(":pakid", $pakid);
        $stmt->execute(); 
        }


        public function addnewpackage($hid,$package,$picture){
            $stmt= $this->db->prepare("INSERT INTO packages (Hid, Package_Description,picture)VALUES (:hid, :package,:picture)");
            
                $stmt->bindParam(":hid",$hid);
                
                $stmt->bindParam(":package",$package);
                $stmt->bindParam(":picture",$picture);
               
      
                $stmt->execute();
        }
        
        public function updatepackage($package,$picture,$pakid){
            $stmt = $this->db->prepare("UPDATE packages SET Package_Description=:package,picture=:picture WHERE Package_id=:pakid");
            $stmt->bindParam(":package",$package);
                $stmt->bindParam(":picture",$picture);
                 $stmt->bindParam(":pakid",$pakid);
                 $stmt->execute();
        }
}
