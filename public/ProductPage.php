<?php
require "../Utility/Functions.php";

if (session_status()!= 2) {
    session_start();
}

$Title = basename(__FILE__, '.php');

// Retrieve the product ID from the URL
//$productId = isset($_GET['id'])? $_GET['id'] : '';


//$productDetails = getProductDetailsByProductId($productId); // You need to implement this function
$pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
$productQuery = 'SELECT * FROM products WHERE id = :id';
$productQueryValues = ['id' => $_GET['ProductID']];

$products = queryMysqlDatabase($pdo, $productQuery, $productQueryValues)->fetch();

require "../templates/nonMain/Head.html.php";
require "../templates/nonMain/Header.html.php";

require "../templates/productLayout.html.php";

require "../templates/nonMain/Footer.html";
?>
