<?php 

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
        array_push($errors, "Please fill out all the fields");
    }

    

}