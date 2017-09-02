<?php

require 'app/models/placesmodel.php';

class placesController extends Controller{
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->places =new Places();
            $this->view->place= $this->places->showPlaces();
            
            if(isset($_REQUEST['Place_id'])){
                $this->view->pid=$_REQUEST['Place_id'];
                $this->view->place = $this->places->deleteplace($this->view->pid);
                header('location:' . URL . 'places');
            }
            }
            $this->view->render('dashboard/places');
        }
        
    
        
    }

