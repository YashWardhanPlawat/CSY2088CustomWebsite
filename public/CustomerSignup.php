<?php
require "../Utility/Functions.php"; // Import any function library/files

if (session_status()!= 2){
    session_start(); // If a session is not set, set it
}

$Title = basename(__FILE__, '.php'); // This changes the name of the tab to this current file's name

// Require necessary templates
require "../templates/nonMain/Head.html.php";
require "../templates/nonMain/Header.html.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usernameMidPoint = floor(strlen($_POST['username'])/2);
    $usernameFirstHalf = substr($_POST['username'], 0, $usernameMidPoint);
    $usernameSecondHalf = substr($_POST['username'], $usernameMidPoint);

    // Check if all inputs are valid
    if ($_POST['username'] && $_POST['email'] && $_POST['password']) {
        // Connect to the database
        $hashedPassword = sha1($usernameFirstHalf . htmlspecialchars($_POST['password']) . $usernameSecondHalf);
        $pdo = setMysqlDatabase('csy2088', 'csy2088', 'csy2088');

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO user_accounts (Name, Email, Password) VALUES (:username, :email, :password)");

        // Bind parameters
        $stmt->bindParam(':username',$_POST['username']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $hashedPassword);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the login page
            header("Location: CustomerLogin.php");
            exit;
        } else {
            // Handle error
            echo "Error: Could not create account.";
        }
    } else {
        // Handle invalid input
        echo "All fields are required.";
    }
} else {
    // Display the form if not submitted
    require "../templates/customerSignupForm.html.php";
}
require "../templates/nonMain/Footer.html";
?>

