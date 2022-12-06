<?php

namespace App\Data;
use PDO;


class DataContext {


    public function conToMySQL1(){
        #Verbindung zur Datenbank aufbauen
        $pdo = new PDO('mysql:host=localhost;dbname=usersudemy;charset=utf8','testus','Rd42ve05!');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }


    public function conToMySQL2(){
        #Verbindung zur Datenbank aufbauen
        $pdo = new PDO('mysql:host=localhost;dbname=usersudemy;charset=utf8','testus','12345');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }


}

?>