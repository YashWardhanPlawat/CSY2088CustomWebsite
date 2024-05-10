<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    userLockOut();
    //userLockOut is a barrier that only admin accounts can get through
    if (isset($_POST['AddAdminAccount'])){
        $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');

        $adminAccQuery = 'SELECT * FROM admin_accounts WHERE Email = :Email';
        $adminAccQueryValues = ['Email' => htmlspecialchars($_POST['email'])];
    
        //Query the admin accounts database for the name the form gave use
        $account = queryMysqlDatabase($pdo, $adminAccQuery, $adminAccQueryValues)->fetch();
        if(!$account){
            if($_POST['password'] == $_POST['confirmPassword']){
                $usernameMidPoint = floor(strlen($_POST['username'])/2);
                $usernameFirstHalf = substr($_POST['username'], 0, $usernameMidPoint);
                $usernameSecondHalf = substr($_POST['username'], $usernameMidPoint);
                $hiddenPassword = sha1($usernameFirstHalf . htmlspecialchars($_POST['password']) . $usernameSecondHalf);
                
                $addAdminQuery = 'INSERT INTO admin_accounts (Name, Password, Email) VALUES (:Name, :Password, :Email)';
                $addAdminQueryValues = [ 'Name' => htmlspecialchars($_POST['username']),
                                     'Password' => $hiddenPassword,
                                     'Email' => htmlspecialchars($_POST['email']) ];
                queryMysqlDatabase($pdo, $addAdminQuery, $addAdminQueryValues);

                $addAdminAccountMessage = 'account made';
            }else{
                $addAdminAccountMessage = "passwords didn't match";
            }
        }else{
            $addAdminAccountMessage = 'account already exsist';

        }
    }

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/tem-AddAdminAccountForm.html.php';
    
    require "../templates/nonMain/Footer.html";
?>