<?php
class UserLogoutController extends Controller {
    public function index(){
        Session::init();
        Session::destroy();
        header("location: default");
    }
   
}
