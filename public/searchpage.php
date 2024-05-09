<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }
    //if a session is not set, set it
    
    $Title = basename(__FILE__, '.php');
    //this changes the name of the tab to this current file's name

    //phpinfo();
    
    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require "../templates/nonMain/sidebar.html.php";

    require "../templates/searchPage.html.php";
    
    require "../templates/nonMain/Footer.html";
?>