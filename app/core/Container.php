<?php

namespace App\Core;

use App\Data\DataContext;
use App\Controller\ErrorController;
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Data\Repository\UserRepository;


class Container {

    private $classInstances = [];
    private $builds = [];

    public function __construct(){
        $this->builds = [

            'homeController' => function(){
                return new HomeController();
                },

            'userController' => function(){
                return new UserController($this->build("userDatabase"));
                    },

            'errorController' => function(){
                return new ErrorController();
                },

            'router' => function(){
                return new Router($this->build("container"));
                },

                "container" => function(){
                return new Container();
                },

                'userDatabase' => function(){
                    return new UserRepository($this->build('pdo'));
                    },
                    'pdo' => function(){
                    $connection = new DataContext();
                    return $connection->conToMySQL1();
                    }
                

                   
    
        ];
    }


    public function build($objekt){
        if (isset($this->builds[$objekt])){
            if (!empty($this->classInstances[$objekt])){
                return $this->classInstances[$objekt];
            }
            $this->classInstances[$objekt] = $this->builds[$objekt]();
        }
        return $this->classInstances[$objekt];
    }


}

?>