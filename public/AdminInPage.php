<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    userLockOut();
    //userLockOut is a barrier that only admin accounts can get through
    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/adminInPage.html.php';
    
    require "../templates/nonMain/Footer.html";
?>