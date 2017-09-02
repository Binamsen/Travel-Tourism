<?php
class Init {
    function __construct() {
        $uri = isset($_GET['url'])? $_GET['url'] : null;
        if($uri){
            $url = rtrim($_GET['url'], '/');
        $url = explode('/', $_GET['url']);//home
        
        $file ='app/controllers/' . $url[0] . 'Controller.php'; 
        if(file_exists($file))
        {
             require $file;
                $className = $url[0].'Controller';
               
               $controller = new $className;
               $controller->index();
               
              
               
               
               
               
               
        if(isset($url[1])) {
             $method =$url[1]; //index
            if($method=="index"){
                   $methodname = null;
               }
               else{
                   $methodname= $url[1];
               }
            $controller->{$url[1]}();//update(array(param1, param2,...))
           // echo $methodname;
        }
        }else{
            require 'app/views/errors/error.php';
        }
       
        } else {
            header('location: home');
        }
    }
}

