<?php
require 'app/models/Allusersmodel.php';
class editusersController extends Controller {
    public function index() {
        Session::init(); 
        $this->users= new Allusers();
         if (isset($_REQUEST['id'])) {
            $this->userid = $_REQUEST['id'];
        } else {
            $this->userid = null;
        } 
        $this->view->user = $this->users->getUser($this->userid);
        $this->view->render('dashboard/editusers');
}
public function update() {
        $this->users = new Allusers();
        if (isset($_REQUEST['update'])) {
            $this->view->uname= $_GET['uname'];
            $this->view->dname = $_GET['dname'];
            $this->view->add = $_GET['add'];
            $this->view->contact = $_GET['contact'];
            $this->view->email = $_GET['email'];
            $this->uid = $_REQUEST['s_n'];
            $this->view->user= $this->users->updateUser($this->view->uname, $this->view->dname, $this->view->add,$this->view->contact, $this->view->email,$this->uid);
           echo  "<script>window.location.href ='http://localhost/OurProject/allusers' </script>";
               

        
}
}
}

