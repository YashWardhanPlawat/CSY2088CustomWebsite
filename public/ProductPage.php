<?php
require "../Utility/Functions.php";

if (session_status()!= 2) {
    session_start();
}

$Title = basename(__FILE__, '.php');

// Retrieve the product ID from the URL
//$productId = isset($_GET['id'])? $_GET['id'] : '';

$productId = isset($_GET['id']) ? $_GET['id'] : '';

$pdo = setMysqlDatabase('csy2088', 'csy2088', 'csy2088');
$productQuery = 'SELECT * FROM products WHERE ID = :ID';
$productQueryValues = ['ID' => $productId];

$products = queryMysqlDatabase($pdo, $productQuery, $productQueryValues)->fetch();

require "../templates/nonMain/Head.html.php";
require "../templates/nonMain/Header.html.php";

require "../templates/productLayout.html.php";

require "../templates/nonMain/Footer.html";
?>
