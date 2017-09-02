<?php

require 'app/models/Allusersmodel.php';

class NewadminController extends Controller {

    public function index() {
        Session::init(); // session_start();
        $this->users = new Allusers();

        if (isset($_REQUEST['id'])) {
            $this->S_N = $_REQUEST['id'];
        } else {
            $this->S_N = null;
        }
        $this->view->user = $this->users->getUser($this->S_N);
        $this->view->render('dashboard/Newadmin');
    }

    public function create() {
        $this->admin = new Allusers();
        if (isset($_REQUEST['submit'])) {

            $this->uname = $_POST['uname'];
            $pass = $_POST['pass'];
           $plen = strlen($pass);
            $this->dname = $_POST['dname'];
            $this->add = $_POST['add'];
            $contact = $_POST['contact'];
            $clen = strlen($contact);
            $this->email = $_POST['email'];
            
            if($plen!=8 && $plen!=16){
                 $this->view->msg = 'Invalid password.Please insert password of 8 characters';
                 echo  "<script>window.location.href ='http://localhost/OurProject/Newadmin?passworderror' </script>";
            }
            else if($clen!=10 && $clen!=15){
                 $this->view->msg = 'Invalid password.Please insert number of length 10 to 15';
                 echo  "<script>window.location.href ='http://localhost/OurProject/Newadmin?numbererror' </script>";
            } 
            
            
            
            else{     
                 $this->user = $this->users->addNewadmin($this->uname,$pass,$this->dname, $this->add, $contact,$this->email);
                   echo  "<script>window.location.href ='http://localhost/OurProject/Allusers' </script>";
            }
////            else if($plen!=8 && $plen!=16){
////                $this->view->msg ='Invalid password.Please insert password of 8 characters';
////            }
//           else{
//               $this->user = $this->users->addNewadmin($this->uname,$pass,$this->dname, $this->add, $contact,$this->email);
//               $this->view->msg ='New admin has been successfully added.';
//           }
//                   $this->user = $this->users->addNewadmin($this->uname,$pass,$this->dname, $this->add, $contact,$this->email);
//                   echo  "<script>window.location.href ='http://localhost/OurProject/Allusers' </script>";
                
            
          
            
        }
    }

}

