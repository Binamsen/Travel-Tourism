<?php

require 'app/models/hotelsModels.php';

class NewhotelController extends Controller {

    public function index() {
        Session::init(); // session_start();
        $this->hotel = new Hotels();

        if (isset($_REQUEST['id'])) {
            $this->Hid = $_REQUEST['id'];
        } else {
            $this->Hid = null;
        }
        $this->view->h = $this->hotel->getHotels($this->Hid);
        $this->view->render('dashboard/Newhotel');
    }

    public function create() {
        $this->posts = new Hotels();
        if (isset($_REQUEST['submit'])) {

            $this->name = $_POST['name'];
            $this->address = $_POST['address'];
            $phone = $_POST['phone'];
            $plen = strlen($phone);
            
            $this->to = $_POST['to'];
            $this->price=$_POST['price'];
            $image_path = $_REQUEST['pic'];
            
            if($plen!=9 && $plen!=10 && $plen!=15){
                 echo  "<script>window.location.href ='http://localhost/OurProject/Newhotel?numbererror' </script>";
            }
           else{
               $this->h = $this->hotel->addNewhotel($this->name, $this->address, $phone,$this->price, $this->to, $image_path);
                   echo  "<script>window.location.href ='http://localhost/OurProject/Hotels' </script>";
                
           }
                   
            
            
            
        }
    }

}
