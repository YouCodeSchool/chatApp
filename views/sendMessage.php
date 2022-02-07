<?php
    session_start();

    include 'autoload.php';

    $msg = new msgController();


    $data = $msg->sentMessage();

    print_r($data);




?>