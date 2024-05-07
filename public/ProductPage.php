<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }
    //if a session is not set, set it

    $Title = basename(__FILE__, '.php');
    //this changes the name of the tab to this current file's name

    $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
    $productQuery = 'SELECT * FROM csy2088.products';
    $productQuerydata = ['productCategoryID' => $_GET["productCategory"] ];
    $productData = queryMysqlDatabase($pdo, $productQuery, $productQuerydata)->fetchAll(PDO::FETCH_ASSOC);

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require "../templates/productLayout.html.php";

    require "../templates/nonMain/Footer.html";
?>