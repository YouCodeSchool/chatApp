<?php
    include 'autoload.php';

    session_start();
    $userIsChecked = new userController();
    
    $userIsChecked->getCheckedUsers();
 


    




?>