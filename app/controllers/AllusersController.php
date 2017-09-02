<?php
 require 'app/models/Allusersmodel.php';
class AllusersController extends Controller {
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->users =new Allusers();
            $this->view->user= $this->users->showUsers();
            //$this->view->totalRows=$this->posts->getTotalRows();
            
            $start=0;
            if(isset($_REQUEST['page'])){
                $start=($_REQUEST['page']-1)*3;
            }
            //$this->view->p=$this->posts->pagination($start, 3);
        if (isset($_REQUEST['S_N'])) {
          $this->view->S_N =$_REQUEST['S_N'];
           $this->view->user = $this->users->deleteUser($this->view->S_N);
            header('location:' . URL . 'dashboard');
        }
           $this->view->render('dashboard/AllUsers');
        }
        else{
            header('location:login');
        }   
    
        
    }
}
