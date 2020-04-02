<?php 

$username = "";
$email = "";
$gender = "";
$password = "";
$password_two = "";
$errors = array();
$created = true; 

include 'config/database.php';

if (isset($_POST['create'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $password_two = $_POST['password_two'];
    
    $username = strip_tags($username);
    $email = strip_tags($email);
    $password = strip_tags($password);
    
    $username = htmlspecialchars($username);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password); 

    $username = htmlentities($username);
    $email = htmlentities($email);
    $password = htmlentities($password); 

    if (empty($username)) {
        array_push($errors, "Username is required");
    } elseif (strlen($username) < 4) {
        array_push($errors, "Username needs to be longer than 4 characters");
    } elseif (!ctype_alnum($username)) {
        array_push($errors, "Username can't have special characters");
    } elseif (strlen($username) > 16) {
        array_push($errors, "Username can't be longer than 16 characters");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email adress is not valid");
    }

    if (empty($gender)) {
        array_push($errors, "Gender is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    } elseif (strlen($password) < 6) {
        array_push($errors, "Password needs to be longer than 6 characters");
    } elseif (!ctype_alnum($password)) {
        array_push($errors, "Password can't have special characters"); 
    } elseif (strlen($password) > 30) {
        array_push($errors, "Password can't be longer than 30 characters");
    }

    if ($password != $password_two) {
        array_push($errors, "The two passwords do not match");
    }

    $stmt = $pdo->prepare("SELECT email FROM users WHERE email=?");
    $stmt->execute([$email]); 
    $user_email = $stmt->fetch();
    if ($user_email) {
        array_push($errors, "Email adress is already being used");
    }
    
    $stmt = $pdo->prepare("SELECT username FROM users WHERE username=?");
    $stmt->execute([$username]); 
    $user_name = $stmt->fetch();
    if ($user_name) {
        array_push($errors, "Username is already being used");
    }
    
    if (count($errors) == 0) {
    $sql = "INSERT INTO users (username, email, password, gender) 
                    VALUES ( ?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$username, $email, $password, $gender]);

    $created = false;
    
    }    
}

