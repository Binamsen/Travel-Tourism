<?php

require 'app/models/Subscribersmodel.php';

class signupController extends Controller {

    public function index() {

        if (isset($_POST['submit'])) {
            $subscriber = new Subscribers();
            $this->name = $_POST['name'];
            $this->age = $_POST['age'];
            $phone = $_POST['phone'];
            $phlen = strlen($phone);
            $this->email = $_POST['email'];
            $password = $_POST['password'];
            $plen = strlen($password);
            $this->nationality = $_POST['nationality'];
            
            if($phlen!=10 && $phlen!=15){
              
               // $subscriber->addsubscribers($this->name, $this->age, $phone, $this->email, $password, $this->nationality);
                $this->view->msg ='Invalid phone number.Please insert a number of length 10';
               
            }
            else if($plen!=8 && $plen!=16){
               $this->view->msg ='Invalid password.Please insert password of 8 characters';
            }
            else{
                $subscriber->addsubscribers($this->name, $this->age, $phone, $this->email, $password, $this->nationality);
             $this->view->msg ='subscribe success.';
                
            }
            
            
//            $subscriber->addsubscribers($this->name, $this->age, $phone, $this->email, $this->password, $this->nationality);
           
        }
        $this->view->render('SIGNUP');
    }

}
