<?php
require 'app/models/sitesettings.php';
class SettingsController extends Controller {
    public function index(){
        Session::init();
        $logged =Session::get('admin');
        if(isset($logged)){
        $this->siteDetails =new SiteSettings();
        $this->view->site= $this->siteDetails->showSiteDetails();
        $this->view->render('dashboard/site_details');
        }
        else{
            header('location: login');
        }
    }
}
