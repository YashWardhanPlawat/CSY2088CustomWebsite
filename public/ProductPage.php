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
    if (isset($_GET["searchFilterCategory"])){
        $productQuery = 'SELECT * FROM products WHERE Category = :Category';
        $productQueryData = ['Category' => $_GET["searchFilterCategory"] ];
        $productData = queryMysqlDatabase($pdo, $productQuery, $productQueryData)->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $productQuery = 'SELECT * FROM csy2088.products';
        $productData = queryMysqlDatabase($pdo, $productQuery, null)->fetchAll(PDO::FETCH_ASSOC);
    }
   

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require "../templates/productLayout.html.php";

    require "../templates/nonMain/Footer.html";
?>