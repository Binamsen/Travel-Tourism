<?php
require 'app/models/hotelsModels.php';
require 'app/models/packagesmodel.php';

class NewpackagesController extends Controller {

    public function index() {
        Session::init(); // session_start();
        $this->packages = new Packages();
        $this->hotels = new Hotels();

        if (isset($_REQUEST['id'])) {
            $this->pakid = $_REQUEST['id'];
            $this->Hid = $_REQUEST['id'];
        } else {
            $this->pakid = null;
            $this->Hid = null;
        }
        $this->view->package = $this->packages->getpackage($this->pakid);
        $this->view->h=$this->hotels->getHotels($this->Hid);
        $this->view->render('dashboard/Newpackages');
    }

    public function create() {
        $this->packages = new Packages();
        if (isset($_REQUEST['submit'])) {
            $Hid = $_POST['hid']; 
            $pack = $_POST['package'];
           
            $image_path = $_REQUEST['picture'];
           
                   $this->package = $this->packages->addnewpackage($Hid,$pack,$image_path);
                   // return header('location:' . URL . 'Newhotel');
                
            
            
            
        }
    }

}


