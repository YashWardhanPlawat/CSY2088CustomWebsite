<?php
function setMysqlDatabase($username, $password, $schema){
    return new PDO('mysql:dbname=' . $schema . ';host=mysql', $username, $password);
}

function queryMysqlDatabase($DBK, $Query, $QueryData){
    $results = $DBK->prepare($Query);
    $results->execute($QueryData);
    return $results;
}

function showlast10Products($username, $password){
    $pdo = new PDO('mysql:dbname=csy2088;host=mysql', $username, $password);
    $results = $pdo->prepare('SELECT * FROM Products ORDER BY product_id DESC LIMIT 10');
    $results->execute();
    $fetchR = $results->fetchAll(PDO::FETCH_ASSOC);
    return $fetchR;
}

function showRandomProducts($username, $password){
    try {
        // Attempt to establish a PDO connection
        $pdo = new PDO('mysql:dbname=csy2088;host=mysql', $username, $password);

        // Prepare and execute the SQL query
        $results = $pdo->prepare('SELECT * FROM products ORDER BY RAND() LIMIT 3');
        $results->execute();

        // Fetch all products
        $products = $results->fetchAll(PDO::FETCH_ASSOC);

        // Return the fetched products
        return $products;
    } catch (PDOException $e) {
        // Handle any errors that occurred during the process
        echo "Connection failed: ". $e->getMessage();
        return null;
    }
}

function showRandomCategories($username, $password){
    $pdo = new PDO('mysql:dbname=csy2088;host=mysql', $username, $password);
    $results = $pdo->prepare('SELECT * FROM categories ORDER BY RAND() LIMIT 2');
    $results->execute();
    $categories = $results->fetchAll(PDO::FETCH_ASSOC);
    return $categories;

}

function checkForAdminAcc($Name, $username, $password){
    $pdo = new PDO('mysql:dbname=csy2088;host=mysql', $username, $password);
    $results = $pdo->prepare('SELECT * FROM admin_accounts WHERE Name = :name');
    $values = ['name' => $Name];
    $results->execute($values);
    $fetchR = $results->fetch();
    if ($fetchR){
        return true;
    }else{
        return false;
    }
}

function getProductCategory($username, $password){
    $pdo = new PDO('mysql:dbname=csy2088;host=mysql', $username, $password);
    $results = $pdo->prepare('SELECT * FROM categories ORDER BY categories');
    $results->execute();
    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function userLockOut(){
    //if a admin account is log in nothing will happen, else it redirects off the page the functions in
    try{
        if(session_status() == 2){
        //this check if a session is active
            if (isset($_SESSION['currentAccountAdmin'])){
            //this check if currentAccountName is set eg a account has been log in to
                if (!checkForAdminAcc($_SESSION['currentAccountAdmin'], 'csy2088', 'csy2088')){
                    //this checks if the current SESSION username is not in the admin database if it isn't they have already log in
                    header("Location: ../AdminLogin.php");
                    //needs redirects to admin login page
                }
            }else{
                header("Location: ../AdminLogin.php");
                //needs redirects to admin login page
            }
        }else{
            header("Location: ../Index.php");
        }
    }catch(exception $e){
        header("Location: ../Index.php");
    }
}

function guestLockOut(){
    try{
        if(session_status() == 2){
        //this check if a session is active
            if (isset($_SESSION['currentUserAccountName'])){
            //this check if currentAccountName is set eg a account has been log in to
                $pdo = new PDO('mysql:dbname=csy2088;host=mysql', 'csy2088', 'csy2088');
                $results = $pdo->prepare('SELECT * FROM user_accounts WHERE user_name = :name');
                $values = ['name' => $_SESSION['currentUserAccountName']];
                $results->execute($values);
                $results->fetch();
                if (!$results){
                    //this checks if the current SESSION username is not in the admin database if it isn't they have already log in
                    header("Location: ../.php");
                    //needs redirects to user login page
                }
            }else{
                header("Location: ../.php");
                //needs redirects to user login page
            }
        }else{
            header("Location: ../index.php");
        }
    }catch(exception $e){
        header("Location: ../index.php");
    }
}

function loadHeader($headerFilePath){
    ob_start();
    if (is_array($headerFilePath)){
        foreach($headerFilePath as $row){
            require $row;
        }
    }else{
        require $headerFilePath;
    }
    $contents = ob_get_clean();
    return $contents;
}
function getProductDetailsByProductId($productId) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE ID =?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$productId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


// this gets product details from the databse
function getProductDetails(){
    $pdo=setMysqlDatabase('csy2088', 'csy2088' ,'csy2088');
    $results=$pdo->query('SELECT * FROM csy2088.products');
    return $results->fetchAll(PDO::FETCH_ASSOC);
}

?>