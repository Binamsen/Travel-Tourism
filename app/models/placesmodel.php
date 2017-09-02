<?php
 
class Places extends Model{
     function __construct() {
        parent::__construct();
        }
        public function showPlaces(){
            $stmt = $this->db->prepare("select * from places");
             $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
        }
        public function showplace($to){
            $stmt = $this->db->prepare("select * from places where  Destination_to=:Destination_to");
//             $stmt->bindParam(":Destination_from",$from);
            $stmt->bindParam(":Destination_to",$to);
             $stmt->execute();
           $rs =$stmt->fetchAll();
         return $rs;
        }   
         public function getPlace($placeid){
        $stmt = $this->db->prepare("SELECT * FROM  places WHERE Place_id = :placeid ");
        $stmt->bindParam(":placeid", $placeid);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    public function deleteplace($pid){
        $stmt=$this->db->prepare("DELETE FROM places WHERE Place_id = :pid");
         $stmt->bindParam(":pid", $pid);
        $stmt->execute(); 
   }
          
        public function addplaces($pname,$pdesc,$picture,$to){
            $stmt=$this->db->prepare("INSERT INTO places(Placename,Place_description,picture,Destination_to) VALUES (:pname,:pdesc,:picture,:to)");
            
            $stmt->bindParam(":pname",$pname);
            $stmt->bindParam(":pdesc",$pdesc);
            $stmt->bindParam(":picture",$picture);
//            $stmt->bindParam(":from",$from);
            $stmt->bindParam(":to",$to);
             $stmt->execute();
        }
        
         public function updateplace($pname, $pdesc,$picture,$pid){
        $stmt = $this->db->prepare("UPDATE places SET Placename= :pname, Place_description=:pdesc,picture=:picture where Place_id= :pid ");
        $stmt->bindParam(":pname",$pname);
       $stmt->bindParam(":pdesc", $pdesc);
        $stmt->bindParam(":picture",$picture);
         $stmt->bindParam(":pid",$pid);

       
       $stmt->execute();
    }    
}
