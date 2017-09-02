<?php
require 'app/models/posts.php';
//require 'app/models/sitesettings.php';
class PostsController extends Controller {
    public function index(){
        Session::init();
        $logged =Session::get('admin');
        if(isset($logged)){
        $this->posts =new Posts();
         //$this->siteDetails =new SiteSettings();
         
        $this->view->totalRows = $this->posts->getTotalRows();//6
        //$this->view->site= $this->siteDetails->showSiteDetails();
        $start =0;
        if(isset($_REQUEST['page'])){
            $start = ($_REQUEST['page']-1)*3; //1
        }

        $this->view->p= $this->posts->pagination($start, 3);
        $this->view->render('dashboard/posts');
        }
        else{
            header('location: login');
            exit();
        }
    }
    public function deletePost(){
        $this->posts = new Posts();
        if (isset($_REQUEST['pid'])) {
            
            $this->pid = $_REQUEST['pid'];//1
            $this->view->post = $this->posts->deletePost($this->pid);
            echo'<script>window.location.href = "'.URL.'dashboard";</script>';
            //header('location:'.URL.'dashboard');
        } 
         
       
    }
}
