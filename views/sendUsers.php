<?php
    include_once 'autoload.php';
    include './controllers/userController.php';
    $data = new userController();

    $users = $data->addUser();









?>