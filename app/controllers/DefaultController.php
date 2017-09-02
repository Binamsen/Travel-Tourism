
<?php
//require 'app/models/Subscribersmodel.php';
//require 'app/models/Messagesmodel.php';
require 'app/models/destinationmodel.php';
class DefaultController extends Controller{
    public function index(){
        $this->view->destinations= new Destinations();
       
        $this->view->destination=$this->view->destinations->getTopdestinations();
         $this->view->places= new Destinations();
         $this->view->place=$this->view->places->getplaces();
//        if(isset($_POST['submit'])){
//    $subscriber = new Subscribers();
//     $this->name= $_POST['name'];
//     $this->age = $_POST['age'];
//     $this->email = $_POST['email'];
//     $this->nationality = $_POST['nationality'];
//     $subscriber->addsubscribers($this->name, $this->age,$this->email,$this->nationality);  
//       $this->view->msg='Subscribed success !';
//        }
        
//        if(isset($_POST['submit1'])){
//       $message = new Messages();
//           $this->name= $_POST['name'];
//     
//     $this->email = $_POST['email'];
//     $this->message = $_POST['message'];
//     $message->addMessages($this->name,$this->email,$this->message);  
//       $this->view->msg='Your Message has been sent successfully !';
//       }
       
        $this->view->render('default');
    }
    
    
    
      
           

       }
       

 
 


