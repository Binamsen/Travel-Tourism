<?php
 require 'app/models/transportmodel.php';
 require 'app/models/transportbookingmodel.php';
class TransportBookingsController extends Controller {
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->transportbookers =new TransportBooking();
            $this->view->trans= $this->transportbookers->showtransportbookers();
            
            
            
          
            
      //  if (isset($_REQUEST['uid'])) {
       //   $this->view->uid =$_REQUEST['uid'];
         //  $this->view->user = $this->users->deleteUser($this->view->uid);
           // header('location:' . URL . 'dashboard');
       // }
           $this->view->render('dashboard/TransportBookings');
        }
        else{
            header('location:login');
        }   
    
        
    }
}


