<?php
require 'app/models/packagesmodel.php';
//require 'app/models/hotelsModels.php';
class packagesController extends Controller{
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->packages =new Packages();
            $hid = $_REQUEST['id'];
            $this->view->package= $this->packages->showpackage($hid);
            
            if(isset($_REQUEST['Package_id'])){
                $this->view->pakid=$_REQUEST['Package_id'];
                $this->view->package = $this->packages->deletepackage($this->view->pakid);
                header('location:' . URL . 'packages');
            }
            $this->view->render('dashboard/packages');
        }
        else{
            header('location:login');
        }   
    
        
    }
}

