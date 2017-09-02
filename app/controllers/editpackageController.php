<?php
require 'app/models/packagesmodel.php';

class editpackageController extends Controller{
       public function index() {
        Session::init(); 
        $this->packages= new Packages();
         if (isset($_REQUEST['id'])) {
            $this->pakid = $_REQUEST['id'];
        } else {
            $this->pakid = null;
        } 
        $this->view->package = $this->packages->getpackage($this->pakid);
        $this->view->render('dashboard/editpackage');
}
public function update(){
    $this->packages = new Packages();
        if (isset($_REQUEST['update'])) {
            $pack= $_GET['package'];
   
           
            $image_path = $_REQUEST['picture'];
            $pakid = $_REQUEST['pakid'];
            $package= $this->packages->updatepackage($pack,$image_path,$pakid);
           //echo  "<script>window.location.href ='http://localhost/OurProject/packages' </script>";
}
}
}


