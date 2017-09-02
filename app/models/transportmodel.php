<?php 
class Transport extends Model{
    function __construct() {
        parent::__construct();
        }
        public function showTransports(){
                $stmt=$this->db->prepare("select * from transport");
                $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
         
         }
         public function showTransport($from,$to){
            $stmt=$this->db->prepare("select * from transport where Destination_from=:Destination_from and Destination_to=:Destination_to");
            $stmt->bindParam(":Destination_from",$from);
            $stmt->bindParam(":Destination_to",$to);
            
            $stmt->execute();
           
         $rs =$stmt->fetchAll();
         return $rs;
            }
             public function showMyBookedTransport($uid){
            $stmt=$this->db->prepare("select * from transportbookers where Booker_id=:uid and status=1");
            $stmt->bindParam(":uid",$uid);

            $stmt->execute();
           
         $rs =$stmt->fetchAll();
         return $rs;
            }
            
             public function getTransport($transportID){
        $stmt = $this->db->prepare("SELECT * FROM  transport WHERE TransID = :transportID ");
        $stmt->bindParam(":transportID", $transportID);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    public function deleteTransport($tid){
        $stmt=$this->db->prepare("DELETE FROM transport WHERE TransID = :tid");
         $stmt->bindParam(":tid", $tid);
        $stmt->execute(); 
   }
    public function updateTransport($tname, $contact, $nplate,$spot, $price,$pic,$transid){
        $stmt = $this->db->prepare("UPDATE transport SET TransportName= :tname, Contact=:contact,NumberPlate=:nplate,DepartureSpot=:spot,Price=:price,Picture=:pic where TransID= :transid ");
        $stmt->bindParam(":tname",$tname);
       $stmt->bindParam(":contact", $contact);
       $stmt->bindParam(":nplate",$nplate);
        $stmt->bindParam(":spot",$spot);
        $stmt->bindParam(":price",$price);
        $stmt->bindParam(":pic",$pic);
         $stmt->bindParam(":transid",$transid);

       
       $stmt->execute();
    }  
    public function addnewtransport($tname,$contact,$nplate,$from,$to,$spot,$price,$pic){
        $stmt = $this->db->prepare("INSERT INTO transport (TransportName,Contact,NumberPlate,Destination_from,Destination_to,DepartureSpot,Price,Picture) VALUES "
                . "(:tname,:contact,:nplate,:from,:to,:spot,:price,:pic)");
        $stmt->bindParam(":tname", $tname);
        $stmt->bindParam(":contact", $contact);
        $stmt->bindParam(":nplate", $nplate);
        $stmt->bindParam(":from", $from);
        $stmt->bindParam(":to", $to);
         $stmt->bindParam(":spot", $spot);
         $stmt->bindParam(":price", $price);
        $stmt->bindParam(":pic", $pic);
        $stmt->execute();
    } 
    
}

