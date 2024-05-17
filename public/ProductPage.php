<?php
require "../Utility/Functions.php";

if (session_status()!= 2) {
    session_start();
}

$Title = basename(__FILE__, '.php');

// Retrieve the product ID from the URL
$productId = isset($_GET['id'])? $_GET['id'] : '';

// Fetch the product details based on the ID
$productDetails = getProductDetailsByProductId($productId); // You need to implement this function

require "../templates/nonMain/Head.html.php";
require "../templates/nonMain/Header.html.php";

require "../templates/productLayout.html.php";

require "../templates/nonMain/Footer.html";
?>
