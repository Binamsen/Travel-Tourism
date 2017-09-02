<?php
require 'app/models/transportmodel.php';
require 'app/models/transportbookingmodel.php';
require 'app/models/bookingmodel.php';
require 'app/models/hotelsmodels.php';
//require 'app/models/Subscribersmodel.php';
class successController extends Controller{
    public function index(){
        $booker = new Booking();
         $hotelID = $_REQUEST['id'];
            if(isset($_POST['hotelsubmit'])){
     
    $uid = $_POST['uid'];
     $members = $_POST['members'];
      $hid = $_REQUEST['id'];
      $hname = $_POST['hname'];
      $image_path = $_REQUEST['picture'];
      $token = $_POST['token'];
      $date = $_POST['date'];
     
     $this->view->bookerid=$token;
     $booker->addnewbookers($uid,$members,$hid,$hname,$image_path, $token,$date);  
       //$this->view->msg='Booking success !'.$bookerID; 
        }
        $transportbooker = new TransportBooking();
        $transportID = $_REQUEST['id'];
        if(isset($_POST['transportsubmit'])){
            
     $uid = $_POST['uid'];
     $members = $_POST['members'];
      $tid = $_REQUEST['id'];
      $tname = $_POST['tname'];
      $image_path=$_REQUEST['picture'];
      $token = $_POST['token'];
      $date = $_POST['date'];
     
     $this->view->transportbookerid=$token;
     $transportbooker->addnewtransportbookers($uid,$members,$tid,$tname,$image_path, $token,$date); 
        }
         $this->view->render('success');
         
    }
        
    }
    
    
       
        


