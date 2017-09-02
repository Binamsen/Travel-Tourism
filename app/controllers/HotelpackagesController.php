<?php
//require 'app/models/hotelsModels.php';
require 'app/models/packagesmodel.php';

class HotelpackagesController extends Controller{
    public function index(){
//        Session::init();
//        $logged=Session::get('admin');
//        if(isset($logged)){
//            $username=$logged;
        
            $this->packages =new Packages();
           $hid = $_REQUEST['id'];
            $this->view->package= $this->packages->showpackage($hid);
            

            $this->view->render('Hotelpackages');
            }
//            $this->view->render('Hotelpackages');
        }
        
    
        
    


