<?php
    require "../Utility/Functions.php";
    //inport any function library/files

    if (session_status() != 2){
        session_start();
    }

    if (isset($_POST['FreelancerSignin'])){
        $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');

        $freelancerAccQuery = 'SELECT * FROM freelancer_accounts WHERE Email = :Email';
        $freelancerAccQueryValues = ['Email' => htmlspecialchars($_POST['email'])];
    
        //Query the admin accounts database for the name the form gave use
        $account = queryMysqlDatabase($pdo, $freelancerAccQuery, $freelancerAccQueryValues)->fetch();
        if(!$account){
            if($_POST['password'] == $_POST['confirmPassword']){
                $usernameMidPoint = floor(strlen($_POST['username'])/2);
                $usernameFirstHalf = substr($_POST['username'], 0, $usernameMidPoint);
                $usernameSecondHalf = substr($_POST['username'], $usernameMidPoint);
                $hiddenPassword = sha1($usernameFirstHalf . htmlspecialchars($_POST['password']) . $usernameSecondHalf);
                
                $addFreelancerQuery = 'INSERT INTO freelancer_accounts (Name, Password, Email) VALUES (:Name, :Password, :Email)';
                $addFreelancerQueryValues = [ 'Name' => htmlspecialchars($_POST['username']),
                                     'Password' => $hiddenPassword,
                                     'Email' => htmlspecialchars($_POST['email']) ];
                queryMysqlDatabase($pdo, $addFreelancerQuery, $addFreelancerQueryValues);
                $account = queryMysqlDatabase($pdo, $freelancerAccQuery, $freelancerAccQueryValues)->fetch();

                header('Location: ../FreeLancerPorfo.php?FreeLancerID=' . $account['ID'] );
            }else{
                $addFreelancerAccountMessage = "passwords didn't match";
            }
        }else{
            $addFreelancerAccountMessage = 'account already exsist';
        }
    }

    require "../templates/nonMain/Head.html.php";
    require "../templates/nonMain/Header.html.php";

    require '../templates/tem-FreeLancerSignupForm.html.php';
    
    require "../templates/nonMain/Footer.html";
?>