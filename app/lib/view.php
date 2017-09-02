<?php
class View {
    public function render($page){
        require 'app/views/'.$page.'.php';
    }
}
