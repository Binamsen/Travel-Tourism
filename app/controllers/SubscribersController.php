<?php
 require 'app/models/Subscribersmodel.php';
class SubscribersController extends Controller {
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->subscribers =new Subscribers();
            $this->view->subscriber= $this->subscribers->showSubscribers();
            //$this->view->totalRows=$this->posts->getTotalRows();
            
      //  if (isset($_REQUEST['uid'])) {
       //   $this->view->uid =$_REQUEST['uid'];
         //  $this->view->user = $this->users->deleteUser($this->view->uid);
           // header('location:' . URL . 'dashboard');
       // }
           $this->view->render('dashboard/subscribers');
        }
        else{
            header('location:login');
        }   
    
        
    }
    public function create(){
        $this->subscribers=new Subscribers;
        if(isset($_REQUEST['submit'])){
           $this->name=$_GET['name'];
            $this->age=$_GET['age'];
            $this->email=$_GET['email'];
            $this->nationality=$_GET['nationality'];
          $this->users->addsubscribers($this->name, $this->age,$this->email,$this->nationality);
          
           header('location:' . URL . 'subscribers');
       }
}
}
