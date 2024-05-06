<?php
function setMysqlDatabase($server, $username, $password, $schema){
    return new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
}

//needed changes

function queryMysqlDatabase($DBK, $Query, $QueryData){
    $results = $DBK->prepare($Query);
    $results->execute($QueryData);
    return $results;
}
//needed changes

function showlast10Products($server, $username, $password){
    $pdo = new PDO('mysql:dbname=Categories_and_Products;host=' . $server, $username, $password);
    $results = $pdo->prepare('SELECT * FROM Products ORDER BY product_id DESC LIMIT 10');
    $results->execute();
    $fetchR = $results->fetchAll(PDO::FETCH_ASSOC);
    return $fetchR;
}
//needed changes

function checkForAdminAcc($Name, $server, $username, $password){
    $pdo = new PDO('mysql:dbname=Admin_Account_database;host=' . $server, $username, $password);
    $results = $pdo->prepare('SELECT * FROM admin_accounts WHERE username = :name');
    $values = ['name' => $Name];
    $results->execute($values);
    $fetchR = $results->fetch();
    if ($fetchR){
        return true;
    }else{
        return false;
    }
}
//needed changes

function getProductCategory($server, $username, $password){
    $pdo = new PDO('mysql:dbname=Categories_and_Products;host=' . $server, $username, $password);
    $results = $pdo->prepare('SELECT * FROM Categories ORDER BY Category');
    $results->execute();
    return $results->fetchAll(PDO::FETCH_ASSOC);
}
//needed changes

function userLockOut(){
    //if a admin account is log in nothing will happen, else it redirects off the page the functions in
    try{
        if(session_status() == 2){
        //this check if a session is active
            if (isset($_SESSION['currentAccountName'])){
            //this check if currentAccountName is set eg a account has been log in to
                if (!checkForAdminAcc($_SESSION['currentAccountName'], '', '', '')){
                    //this checks if the current SESSION username is not in the admin database if it isn't they have already log in
                    header("Location: ../.php");
                    //needs location
                }
            }else{
                header("Location: ../.php");
                //needs location
            }
        }else{
            header("Location: ../index.php");
        }
    }catch(exception $e){
        header("Location: ../index.php");
    }
}

function guestLockOut(){
    try{
        if(session_status() == 2){
        //this check if a session is active
            if (isset($_SESSION['currentUserAccountName'])){
            //this check if currentAccountName is set eg a account has been log in to
                $pdo = new PDO('mysql:dbname=Admin_Account_database;host=' . 'mysql', 'student', 'student');
                $results = $pdo->prepare('SELECT * FROM user_accounts WHERE user_name = :name');
                $values = ['name' => $_SESSION['currentUserAccountName']];
                $results->execute($values);
                $results->fetch();
                if (!$results){
                    //this checks if the current SESSION username is not in the admin database if it isn't they have already log in
                    header("Location: ../.php");
                    //needs location
                }
            }else{
                header("Location: ../.php");
                //needs location
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
//needed changes

function testfunc(){
    ob_start();
    echo "<p>test test</p>";
    $contents = ob_get_clean();
    return $contents;
}


// this gets product details from the databse
function getProductDetails($server,$username,$password){
    $pdo=setMysqlDatabase($server, $username, $password, 'csy2088');
    $results=$pdo->query('SELECT Name, Price, Description, Provider FROM products');
    return $results->fetchAll(PDO::FETCH_ASSOC);
}
$productDetails = getProductDetails('mysql', 'csy2088', 'csy2088');
?>