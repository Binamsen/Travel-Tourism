<?php
require 'app/models/transportbookingmodel.php';
require 'app/models/transportmodel.php';

class transportbookingController extends Controller{
     public function index(){
        Session::init();
        $signed = Session::get('subscriber');
         
         $this->transport = new Transport(); 
          $transportID = $_REQUEST['tid'];
         if(isset($signed)){
        $this->view->trans=$this->transport->getTransport($transportID);
        $this->view->render('transportbooking');
         }else{

             header('location: signin?tid='.$transportID);  
         }
     
         

        //$this->view->render('transportbooking');
}
}
