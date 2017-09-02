<?php

require 'app/models/transportmodel.php';
require 'app/models/hotelsModels.php';
require 'app/models/placesmodel.php';
require 'app/models/destinationmodel.php';
class SearchController extends controller {

    public function index() {
         $alltransport = new Transport();
        $allhotels = new Hotels();
        $allplaces = new Places();
       
        $destination = new Destinations();
       
        if (isset($_REQUEST['search'])) {
            $from = $_GET['from'];
            $to = $_GET['to'];
            $destination->increasecount($to);

            $this->view->trans = $alltransport->showTransport($from,$to);
            $this->view->h = $allhotels->showHotels($to);
            $this->view->place = $allplaces->showplace($to);
           
        }

        $this->view->render('search');
    }

}
