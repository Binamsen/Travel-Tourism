<?php

class MediaController extends Controller {

    public function index() {
        Session::init();
        $logged = Session::get('admin');
        if (isset($logged)) {
            $this->view->render('dashboard/media');
        } else {
            header('location: login');
        }
    }

    public function store() {
        if (isset($_REQUEST['submit'])) {
            $uploddir = 'public/images/uploads/';
            $name = $_FILES['photo']['name'];
            $tmpname = $_FILES['photo']['tmp_name'];
            $size = $_FILES['photo']['size']; //byte
            $type = $_FILES['photo']['type'];
            $ok = 1;
            $fileExtension = pathinfo($name, PATHINFO_EXTENSION);

            if (file_exists($uploddir . $name)) {
                echo("File Already Exists.");
                $ok = 0;
            } else {
                if ($size > 1048576) {
                    echo("file size too large");
                    $ok = 0;
                } else if ($fileExtension != "jpg" && $fileExtension != "png" && $fileExtension != "gif") {
                    echo("Image format not supported.");
                    $ok = 0;
                } else {

                    move_uploaded_file($tmpname, $uploddir . $name);
                }
            }
        }
         echo  "<script>window.location.href ='http://localhost/OurProject/media' </script>";
    }

}
