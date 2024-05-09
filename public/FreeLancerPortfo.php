<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    $Title = basename(__FILE__, '.php');

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/freelancer.html';
    
    require "../templates/nonMain/Footer.html";
?>