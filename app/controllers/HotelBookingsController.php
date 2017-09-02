<?php
 require 'app/models/bookingmodel.php';
 require 'app/models/hotelsModels.php';
class HotelBookingsController extends Controller {
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->booker =new Booking();
            $this->view->book= $this->booker->showbookers();
             $this->view->render('dashboard/HotelBookings');
        }
        else{
            header('location:login');
        }  
    }
    
     
}
