<?php

require 'app/models/transportmodel.php';

class edittransportController extends Controller{
       public function index() {
        Session::init(); 
        $this->transports= new Transport();
         if (isset($_REQUEST['id'])) {
            $this->transID = $_REQUEST['id'];
        } else {
            $this->transID = null;
        } 
        $this->view->trans = $this->transports->getTransport($this->transID);
        $this->view->render('dashboard/edittransport');
}
public function update(){
    $this->transports = new Transport();
   
        if (isset($_REQUEST['update'])) {
            $this->view->tname= $_GET['tname'];
            $contact = $_GET['contact'];
           $plen = strlen($contact);
            $id = $_REQUEST['transportid'];
            $this->view->nplate = $_GET['nplate'];
            $this->view->spot = $_GET['spot'];
            $this->view->price = $_GET['price'];
            $image_path = $_REQUEST['pic'];
            $this->transid = $_REQUEST['transportid'];
          // echo $id;
          if($plen!=9 && $plen!=10){
               echo  "<script>window.location.href ='http://localhost/OurProject/edittransport?id=".$id."error' </script>";
            }
            else{
                $this->view->trans= $this->transports->updateTransport($this->view->tname, $contact, $this->view->nplate,$this->view->spot,$this->view->price,$image_path,$this->transid);
           echo  "<script>window.location.href ='http://localhost/OurProject/Transport' </script>";
            }            
}
}
}
