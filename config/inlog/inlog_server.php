<?php 
session_start();

$username = "";
$password = "";
$errors = array();

include 'config/database.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = strip_tags($username);
    $password = strip_tags($password);
    
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password); 

    $username = htmlentities($username);
    $password = htmlentities($password); 

    if ((empty($username)) || (empty($password))) {
        array_push($errors, "Please fill all of the fields");
    } else {
        $stmt = $pdo->prepare("SELECT password FROM users WHERE username=?");
        $stmt->execute([$username]); 
        $user_password = $stmt->fetch();
        if (!$user_password) {
            array_push($errors, "Username is incorrect");
        }
    
        $stmt = $pdo->prepare("SELECT username FROM users WHERE password=?");
        $stmt->execute([$password]); 
        $user_name = $stmt->fetch();
        if (!$user_name) {
            array_push($errors, "Password is incorrect");
        }
    }

    if (count($errors) == 0) {
        $_SESSION['user'] = $username;
        $_SESSION['color'] = rand(0,6);
        header("location:profile.php?You Logged in");
    }

}