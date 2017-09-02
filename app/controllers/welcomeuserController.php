<?php
require 'app/models/Subscribersmodel.php';

require 'app/models/signinmodel.php';
require 'app/models/hotelsModels.php';
require 'app/models/transportmodel.php';
 require 'app/models/bookingmodel.php';
 require 'app/models/transportbookingmodel.php';
 require 'app/models/destinationmodel.php';
class welcomeuserController extends Controller{
    public function index(){
       
      if(isset($_REQUEST['id'])){
          $id=$_REQUEST['id'];
          header('location:booking?id='.$id);
       } 
       else if(isset($_REQUEST['tid'])){
           $tid=$_REQUEST['tid'];
           header('location: transportbooking?tid='.$tid);
       } 
       else {
           $this->users= new Subscribers();
           $this->signin = new UserSignin();
           $this->bookedhotels=new Hotels();
           $this->bookedtransports=new Transport();
           $this->view->places= new Destinations();
        Session::init();
        $email=Session::get('subscriber');
        $uid= Session::getUserID('uid');
        $this->view->bookedhotel=$this->bookedhotels->showMyBookedHotels($uid);
        $this->view->bookedtransport=$this->bookedtransports->showMyBookedTransport($uid);
        $this->view->user = $this->users->getSubscriber($email);
        $this->view->place=$this->view->places->getplaces();
        $this->view->render('welcomeuser');
       }
    }
    
    public function update(){
             $this->booker = new Booking();
             $this->transportbooker = new TransportBooking();
             if (isset($_REQUEST['token'])) {
            $token= $_GET['token'];
   
           
            
            $hotelbooking= $this->booker->update($token);
            $transportbooking= $this->transportbooker->update($token);
            
            
           echo "<script>alert('Your Booking has been successfully cancelled'); </script>";
                                    
          
            }
             echo  "<script>window.location.href ='http://localhost/OurProject/welcomeuser' </script>";
    }
           
             }


