<?php

namespace App\Core;


class Router {


public function __construct(Container $container){
    $this->container = $container;
}

public function add($ctrl, $function){
    $container = $this->container->build($ctrl);
    $view = $function;
    $this->build($container, $view);
}

public function build($container, $view){
    $container->$view();
}
}

?>