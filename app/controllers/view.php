<?php
class View {
//    function __construct() {
//        echo 'view page';
//    }

    public function render($page){
        require 'app/views/'.$page.'.php';
    }
}
