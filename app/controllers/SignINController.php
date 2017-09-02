<?php
require 'app/models/signinmodel.php';

class SignINController extends Controller {

    public function index(){
        if(isset($_POST['submit'])){
        $this->e = $_POST['email']; 
        $this->p = $_POST['password']; 
        $signed ='subscriber';
        $this->signin = new UserSignin();
        $count=$this->signin-> checkSignin($this->e,$this->p);
        $uid=$this->signin->getUid($this->e,$this->p);
        
        if($count>0){
           Session::init();
            Session::set($signed, $this->e);
            $uidlist=$this->signin->getUid($this->e);
        foreach ($uidlist as $this->uid){
            $this->uid[0];
        }
            Session::setUserID('uid',  $this->uid[0]);
           if(isset($_REQUEST['id'])){
               header("location: welcomeuser?id=".$_REQUEST['id']);
            }
            else if(isset($_REQUEST['tid'])){
                header("location: welcomeuser?tid=".$_REQUEST['tid']);
            }else{
                header("location: welcomeuser");
            }
        }
 else {
            $this->view->msg='invalid email or password';
       }
        
       
 }
        
        
    $this->view->render('SignIN');
        
    }
}
       
