<?php
    session_start();

    include 'autoload.php';

    $userData = new userController();

    $data = $userData->getSelectedUsers();
    
    


?>