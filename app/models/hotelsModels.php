<?php
class Hotels extends Model{
    function __construct() {
        parent::__construct();
        }
         public function showHotel(){
                $stmt=$this->db->prepare("select * from hotels");
                $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
            }
        
            public function showHotels($to){
            $stmt=$this->db->prepare("select * from hotels where Destination_to=:Destination_to");
//            $stmt->bindParam(":Destination_from",$from);
            $stmt->bindParam(":Destination_to",$to);
            
            $stmt->execute();
           
         $rs =$stmt->fetchAll();
         return $rs;
            }
            
            public function showMyBookedHotels($uid){
            $stmt=$this->db->prepare("select * from bookers where Booker_id=:uid and status=1");
            $stmt->bindParam(":uid",$uid);

            $stmt->execute();
           
         $rs =$stmt->fetchAll();
         return $rs;
            }
            
           public function getHotels($hotelID){
        $stmt = $this->db->prepare("SELECT * FROM  hotels WHERE Hid = :hotelID ");
        $stmt->bindParam(":hotelID", $hotelID);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
   
    public function deleteHotel($htid) {
        $stmt = $this->db->prepare("DELETE FROM hotels WHERE Hid=:htid");
        $stmt->bindParam(":htid",$htid);
        $stmt->execute();        
    }
    
            public function addNewhotel($name,$address,$phone,$price,$to,$pic){
        $stmt = $this->db->prepare("INSERT INTO hotels (Name,Address,Phone_Number,Price_Description,Destination_to,Picture) VALUES (:name,:address,:phone,:price,:to,:pic)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":price", $price);
//        $stmt->bindParam(":from", $from);
        $stmt->bindParam(":to", $to);
        $stmt->bindParam(":pic", $pic);
        $stmt->execute();
    } 
       public function updateHotel($name, $address, $phone, $price,$pic,$hid){
        $stmt = $this->db->prepare("UPDATE hotels SET Name= :name, Address=:address,Phone_Number=:phone,Price_Description=:price,Picture=:pic where Hid= :hid ");
        $stmt->bindParam(":name",$name);
       $stmt->bindParam(":address", $address);
       $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":price",$price);
        $stmt->bindParam(":pic",$pic);
         $stmt->bindParam(":hid",$hid);

       
       $stmt->execute();
    }    
         
}

