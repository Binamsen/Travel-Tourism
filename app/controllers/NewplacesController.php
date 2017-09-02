<?php
require 'app/models/placesmodel.php';
class NewplacesController extends Controller {

    public function index() {
        Session::init(); // session_start();
        $this->places = new Places();

        if (isset($_REQUEST['id'])) {
            $this->Placeid = $_REQUEST['id'];
        } else {
            $this->Placeid = null;
        }
        $this->view->place = $this->places->getPlace($this->Placeid);
        $this->view->render('dashboard/Newplaces');
    }

    public function create() {
        $this->place = new Places();
        if (isset($_REQUEST['submit'])) {

            $this->pname = $_POST['pname'];
            $this->pdesc = $_POST['pdesc'];
            
            $image_path = $_REQUEST['picture'];
//            $this->from = $_POST['from'];
             $this->to = $_POST['to'];
           
                   $this->place = $this->places->addplaces($this->pname, $this->pdesc ,$image_path, $this->to);
                   // return header('location:' . URL . 'Newhotel');
                echo  "<script>window.location.href ='http://localhost/OurProject/places' </script>";
            
            
            
        }
    }

}


