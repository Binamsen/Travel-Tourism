<?php

require 'app/models/hotelsModels.php';

class edithotelController extends Controller{
       public function index() {
        Session::init(); 
        $this->hotels= new Hotels();
         if (isset($_REQUEST['id'])) {
            $this->hotelID = $_REQUEST['id'];
        } else {
            $this->hotelID = null;
        } 
        $this->view->hotel = $this->hotels->getHotels($this->hotelID);
        $this->view->render('dashboard/edithotel');
}
public function update(){
    $this->hotels = new Hotels();
        if (isset($_REQUEST['update'])) {
            $this->view->name= $_GET['name'];
            $this->view->address = $_GET['address'];
            $phone = $_GET['phone'];
            $plen = strlen($phone);
            $id = $_REQUEST['h_id'];
            $this->view->price = $_GET['price'];
            $image_path = $_REQUEST['pic'];
            $this->hid = $_REQUEST['h_id'];
            
            if($plen!=9 && $plen!=10){
                echo  "<script>window.location.href ='http://localhost/OurProject/edithotel?id=".$id."error' </script>";
            }
            $this->view->hotel= $this->hotels->updateHotel($this->view->name, $this->view->address, $phone,$this->view->price,$image_path,$this->hid);
           echo  "<script>window.location.href ='http://localhost/OurProject/Hotels' </script>";
}
}
}
