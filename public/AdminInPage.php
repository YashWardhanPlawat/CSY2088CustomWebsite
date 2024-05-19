<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    userLockOut();
    //userLockOut is a barrier that only admin accounts can get through
    $pdo = setMysqlDatabase('csy2088', 'csy2088', 'csy2088');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addProduct'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $provider = $_POST['provider'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $imageFileName = basename($_FILES['image']['name']);
            $imageFilePath = '../images/' . $imageFileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $imageFilePath);
        }

        $query = 'INSERT INTO products (Name, Price, Category, Description, Provider) VALUES (:name, :price, :category, :description, :provider)';
        $params = [
            ':name' => $name,
            ':price' => $price,
            ':category' => $category,
            ':description' => $description,
            ':provider' => $provider
        ];

        queryMysqlDatabase($pdo, $query, $params);
    } elseif (isset($_POST['deleteProduct'])) {
        $id = $_POST['id'];

        $query = 'DELETE FROM products WHERE ID = :id';
        $params = [':id' => $id];

        queryMysqlDatabase($pdo, $query, $params);
    }
}

$products = queryMysqlDatabase($pdo, 'SELECT * FROM products',null)->fetchAll(PDO::FETCH_ASSOC);

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/adminInPage.html.php';
    
    require "../templates/nonMain/Footer.html";
?>