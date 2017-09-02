<?php

require 'app/models/transportmodel.php';

class newtransportController extends Controller {

    public function index() {
        Session::init(); // session_start();
        $this->transports = new Transport();

        if (isset($_REQUEST['id'])) {
            $this->TransID = $_REQUEST['id'];
        } else {
            $this->TransID = null;
        }
        $this->view->trans = $this->transports->getTransport($this->TransID);
        $this->view->render('dashboard/newtransport');
    }

    public function create() {
        $this->transports = new Transport();
        if (isset($_REQUEST['submit'])) {

            $this->tname = $_POST['tname'];
            $contact = $_POST['contact'];
            $plen= strlen($contact);
            $this->nplate = $_POST['nplate'];
           $this->from = $_POST['from'];
            $this->to = $_POST['to'];
             $this->spot=$_POST['spot'];
            $this->price=$_POST['price'];
            $image_path = $_REQUEST['pic'];
            
            if($plen!=9 && $plen!=10){
                 echo  "<script>window.location.href ='http://localhost/OurProject/Newtransport?numbererror' </script>";
            }
           else{
                $this->trans = $this->transports->addnewtransport($this->tname, $contact, $this->nplate,$this->from, $this->to,$this->spot,$this->price, $image_path);
               echo  "<script>window.location.href ='http://localhost/OurProject/Transport' </script>";
                }
                  
                   // return header('location:' . URL . 'Newhotel');
                
            
            
            
        }
    }

}


