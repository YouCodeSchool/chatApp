<?php

    include 'autoload.php';

    $search = new userController();

    $data = $search->getSearchedUsers();

    echo $data;




?>