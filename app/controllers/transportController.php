<?php
require 'app/models/transportmodel.php';
class transportController extends Controller{
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->transports =new Transport();
            $this->view->trans= $this->transports->showTransports();
            
            if(isset($_REQUEST['TransID'])){
                $this->view->tid=$_REQUEST['TransID'];
                $this->view->trans = $this->transports->deleteTransport($this->view->tid);
                header('location:' . URL . 'dashboard');
            }
            $this->view->render('dashboard/Transport');
        }
        else{
            header('location:login');
        }   
    
        
    }
}

