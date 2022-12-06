<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;

class HomeController extends AbstractController {

    public function home(){

        
        $this->pageload("home", "home", []);
     }




}

?>