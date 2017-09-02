<?php

require 'app/models/adminlogin.php';

class LoginController extends Controller {

    public function index(){
        Session::init(); // session_start();
        //$logged = Session::get('user');
//        if(isset($logged)){
//            header("location: dashboard");
//        }
        if(isset($_POST['submit'])){
        $this->u = $_POST['username']; 
        $this->p = md5($_POST['password']); 
        $logged ='admin';
        $this->login = new AdminLogin;
        $count=$this->login-> checkLogin($this->u, $this->p);
        if($count>0){
            Session::set($logged, $this->u);
            header("location: dashboard");
        }
 else {
            $this->view->msg='invalid';
 }
        }
        
        $this->view->render('dashboard/login');
        
    }
}
       
