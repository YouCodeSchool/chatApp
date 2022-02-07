<?php

    session_start();

    include 'autoload.php';

    $msg = new msgController();

    $data = $msg->getMsg();

    print_r($data);









?>