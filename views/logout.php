<?php

    session_start();
    include_once 'autoload.php';

    $user = new userController();

    $data = $user->getLoginOutUser();


    if($data){
        session_unset();
        session_destroy();
        echo 'success';
        
    }else {
        echo 'failed';
    }




?>