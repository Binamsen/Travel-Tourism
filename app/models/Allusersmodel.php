<?php
class Allusers extends Model{
    function __construct() {
        parent::__construct();
        }
        public function showUsers(){
            $stmt=$this->db->prepare("select * from admin");
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
            }
             public function getUser($userid){
        $stmt = $this->db->prepare("SELECT * FROM  admin  WHERE S_N = :userid ");
        $stmt->bindParam(":userid", $userid);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    public function deleteUser($UserID){
        $stmt=$this->db->prepare("DELETE FROM admin WHERE S_N = :UserID");
         $stmt->bindParam(":UserID", $UserID);
        $stmt->execute(); 
   }
    

    public function updateUser($uname, $dname, $add, $contact, $email,$uid){
        $stmt = $this->db->prepare("UPDATE admin SET username= :uname, Date_of_birth= :dname, Address=:add, Phone=:contact, Email=:email where S_N= :uid ");
        $stmt->bindParam(":uname",$uname);
       $stmt->bindParam(":dname", $dname);
       $stmt->bindParam(":add",$add);
        $stmt->bindParam(":contact",$contact);
        $stmt->bindParam(":email",$email);
         $stmt->bindParam(":uid",$uid);
       
       $stmt->execute();
    }
    
    public function addNewadmin($uname,$pass,$dname,$add,$contact,$email){
        $stmt=$this->db->prepare("INSERT INTO admin (username,password,Date_of_birth,Address,Phone,Email) VALUES (:uname,:pass,:dname,:add,:contact,:email)");
        $stmt->bindParam(":uname",$uname);
         $stmt->bindParam(":pass", $pass);
       $stmt->bindParam(":dname", $dname);
       $stmt->bindParam(":add",$add);
        $stmt->bindParam(":contact",$contact);
        $stmt->bindParam(":email",$email);
        
       
       $stmt->execute();
    }
     
}

