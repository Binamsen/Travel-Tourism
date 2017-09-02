<?php
class LogoutController extends Controller {
    public function index(){
        Session::init();
        Session::destroy();
        header("location: login");
    }
   
}
