<?php
    include './controllers/homeController.php';
    // include './controllers/employeeController.php';



    $home = new homeController();

    
    // $home->index()

    $page = ['home','userData','landingPage','update',
    'sendUsers','login','getUsers','stories','messages'
    ,'search','selectUser','sendMessage','getMessages','logout'
];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $page)){
            $page = $_GET['page'];
            $home->index($page);
        }else {
            include 'views/includes/ErrorPage.inc.php';
        }
    }else {
        $home->index('home');
    }

?>


