<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;

class ErrorController extends AbstractController {


    public function errorPage(){
        $this->pageload("Error", "404", []);
     }



}

?>