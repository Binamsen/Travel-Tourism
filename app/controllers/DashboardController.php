<?php 

class DashboardController extends Controller{
    public function index(){
        Session::init();
       $logged = Session::get('admin');
       if(isset($logged)){
        
        $this->view->render('dashboard/dashboard');
        }
        else{
            header('location: login');
        }
            
    }
    }


