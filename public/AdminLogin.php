<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }
    //if a session is not set, set it
    
    $Title = basename(__FILE__, '.php');
    //this changes the name of the tab to this current file's name

    if (isset($_POST['AdminLogin'])){
        $adminLogInQuery = 'SELECT * FROM admin_accounts WHERE Name = :name';
        $adminLogInQueryValues = ['name' => htmlspecialchars($_POST['username'])];
        $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
        //Query the admin accounts database for the name the form gave use
        $account = queryMysqlDatabase($pdo, $adminLogInQuery, $adminLogInQueryValues)->fetch();
        if($account){
            //if database has a entry under that name, continue
            $usernameMidPoint = floor(strlen($account['Name'])/2);
            $usernameFirstHalf = substr($account['Name'], 0, $usernameMidPoint);
            $usernameSecondHalf = substr($account['Name'], $usernameMidPoint);
            if(sha1($usernameFirstHalf . htmlspecialchars($_POST['password']) . $usernameSecondHalf) == $account['Password']){
                //if the entered password is equal to the password associated to the account on the database set the SESSION value
                $_SESSION['currentAccountAdmin'] = $account['Name'];
                header('Location: ../AdminInPage.php');
                //loged in page
            }else{
                //this retures a "failed to login" because the password with the entered account name dont match
                $adminLoginMessage = 'failed to login';
            }
        }else{
            //this retures a "failed to login" because a account under that name dosen't exist
            $adminLoginMessage = 'failed to login';
        }
    }
    
    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/AdminLoginForm.html.php';

    require "../templates/nonMain/Footer.html";
?>