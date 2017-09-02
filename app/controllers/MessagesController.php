<?php
 require 'app/models/Messagesmodel.php';
class MessagesController extends Controller {
    public function index(){
        Session::init();
        $logged=Session::get('admin');
        if(isset($logged)){
            $username=$logged;
            $this->messages =new Messages();
            $this->view->message= $this->messages->showMessages();
            //$this->view->totalRows=$this->posts->getTotalRows();
            
      //  if (isset($_REQUEST['uid'])) {
       //   $this->view->uid =$_REQUEST['uid'];
         //  $this->view->user = $this->users->deleteUser($this->view->uid);
           // header('location:' . URL . 'dashboard');
       // }
           $this->view->render('dashboard/Messages');
        }
        else{
            header('location:login');
        }   
    
        
    }
    
    public function create(){
        $this->messages=new Messages;
        if(isset($_REQUEST['submit1'])){
           $this->name=$_GET['name'];
            
            $this->email=$_GET['email'];
            $this->message=$_GET['message'];
          $this->users->addMessages($this->name,$this->email,$this->message);
          
           header('location:' . URL . 'Messages');
       }
}

}