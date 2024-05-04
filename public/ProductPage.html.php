<?php
require "../Utility/Functions.php";
if (session_status() != 2){
    session_start();
}
$Content = loadHeader('../templates/productLayout.html.php');
$Title = basename(__FILE__, '.php');
require "../templates/Layout.html.php";

?>