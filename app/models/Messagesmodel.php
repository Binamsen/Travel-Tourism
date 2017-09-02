<?php

class Messages extends Model{
    function __construct() {
        parent::__construct();
}
 public function showMessages(){
            $stmt=$this->db->prepare("select * from messages");
            $stmt->execute();
            $rs=$stmt->fetchAll();
         return $rs;
            }

  public function addMessages($name,$email,$message){
      $stmt= $this->db->prepare("INSERT INTO messages (Name,Email,Message) VALUES (:name, :email,:message)");
                $stmt->bindParam(":name",$name);
                
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":message",$message);
                $stmt->execute();
      
  }          
}