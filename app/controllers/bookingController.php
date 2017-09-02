<?php

require 'app/models/bookingmodel.php';
require 'app/models/hotelsmodels.php';
//require 'app/models/Subscribersmodel.php';

class bookingController extends Controller{
     public function index(){
         Session::init();
         $signed = Session::get('subscriber');

         
         $this->allhotels=new Hotels(); 
         $hotelID = $_REQUEST['id'];
        
         
         if(isset($signed)){
              $this->view->h=$this->allhotels->getHotels($hotelID);
              
             
              $this->view->render('booking');
         }else{

             header('location: signin?id='.$hotelID);  
         }
       
}

}
