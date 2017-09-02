<?php
require 'app/models/placesmodel.php';

class editplaceController extends Controller{
       public function index() {
        Session::init(); 
        $this->places= new Places();
         if (isset($_REQUEST['id'])) {
            $this->placeID = $_REQUEST['id'];
        } else {
            $this->placeID = null;
        } 
        $this->view->place = $this->places->getPlace($this->placeID);
        $this->view->render('dashboard/editplace');
}
public function update(){
    $this->places = new Places();
        if (isset($_REQUEST['update'])) {
            $this->view->pname= $_GET['pname'];
            $this->view->pdesc = $_GET['pdesc'];
           
            $image_path = $_REQUEST['picture'];
            $this->pid = $_REQUEST['pid'];
            $this->view->place= $this->places->updateplace($this->view->pname, $this->view->pdesc,$image_path,$this->pid);
           echo  "<script>window.location.href ='http://localhost/OurProject/places' </script>";
}
}
}


