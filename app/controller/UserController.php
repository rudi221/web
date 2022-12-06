<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Data\Repository\UserRepository;

class UserController extends AbstractController{

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }


    public function userPage(){

        $users = $this->userRepository->getUsers();

        $this->pageload("users", "users", [
            'users' => $users
        ]);
     }




}

?>
