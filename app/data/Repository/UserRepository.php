<?php

namespace App\Data\Repository;
use App\Core\Abstract\AbstractDatabase;
use App\Models\UserModel;
use PDO;

class UserRepository extends AbstractDatabase {

    public function getTable()
    {
        return "users";
    }

    public function getModel()
    {
        return UserModel::class;
    }

    #Aus Datenbank abrufen
    function getUsers(){
        $table = $this->getTable();
        $model = $this->getModel();
        if (!empty( $this->pdo)){
            $users =  $this->pdo->prepare("SELECT * FROM `$table`");
            $users->execute();
            $users->setFetchMode(PDO::FETCH_CLASS, $model);
            $usersdata = $users->fetchAll(PDO::FETCH_CLASS);
        }
        return $usersdata;
    }


#Einträge in die Datenbank speichern
    function newUser(){
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("INSERT INTO `$table` (`username`, `mail`, `password`) VALUES (:username, :mail, :password)");
            $statement->execute([
                'username' => "Otto",
                'mail' => "otto@test.de",
                'password' => "fdkjdfhkas"
            ]);
        }
    }


#Einträge aus Datenbank löschen
    function deleteUser($username){
        $username = "Otto";
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("DELETE FROM `$table` WHERE `username` = :username");
            $statement->execute([
                'username' => $username
            ]);
        }
    }


#Einträge aus Datenbank updaten
    function updateUser(){
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("UPDATE `$table` SET `password` = :password WHERE `userid` = :userid");
            $statement->execute([
                'password' => "d3as50d",
                'userid' => 446
            ]);
        }
    }
}