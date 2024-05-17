<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    $Title = basename(__FILE__, '.php');

    $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
    $freelancerAccQuery = 'SELECT * FROM freelancer_accounts WHERE ID = :ID';
    $freelancerAccQueryValues = ['ID' => $_GET['FreeLancerID']];

    $account = queryMysqlDatabase($pdo, $freelancerAccQuery, $freelancerAccQueryValues)->fetch();

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/freelancer.html.php';
    
    require "../templates/nonMain/Footer.html";
?>