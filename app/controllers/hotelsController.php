<?php
require 'app/models/hotelsModels.php';
class hotelsController extends Controller{
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->hotels =new Hotels();
            $this->view->hotel= $this->hotels->showHotel();
            
            if(isset($_REQUEST['Hid'])){
               $this->view->htid=$_REQUEST['Hid'];
               $this->view->hotel=$this->hotels->deleteHotel($this->view->htid);
                header('location:' . URL . 'dashboard');
            }
            $this->view->render('dashboard/Hotels');
        }
        else{
            header('location:login');
        }   
    
        
    }
}


