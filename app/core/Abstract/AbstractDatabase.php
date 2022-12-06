<?php

namespace App\Core\Abstract;


use PDO;

abstract class AbstractDatabase{

    protected $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    abstract function getTable();
    abstract function getModel();


}
?>