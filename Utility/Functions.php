<?php
function setMysqlDatabase($server, $username, $password, $schema){
    //return new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
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
            if (isset($_SESSION['currentAccountName'])){
            //this check if currentAccountName is set eg a account has been log in to
                if (!checkForAdminAcc($_SESSION['currentAccountName'], 'csy2088', 'csy2088')){
                    //this checks if the current SESSION username is not in the admin database if it isn't they have already log in
                    header("Location: ../.php");
                    //needs redirects to admin login page
                }
            }else{
                header("Location: ../.php");
                //needs redirects to admin login page
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

// this gets product details from the databse
function getProductDetails(){
    $pdo=setMysqlDatabase('csy2088', 'csy2088' ,'csy2088');
    $results=$pdo->query('SELECT * FROM csy2088.products');
    return $results->fetchAll(PDO::FETCH_ASSOC);
}
?>