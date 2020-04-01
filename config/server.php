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


    if (empty($username)) {
        array_push($errors, "Username is required");
    } elseif (strlen($username) < 4) {
        array_push($errors, "Username needs to be longer than 4 characters");
    }
    if (strlen($username) > 16) {
        array_push($errors, "Username cant be longer than 16 characters");
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
    } 
    if (strlen($password) > 30) {
        array_push($errors, "Password cant be longer than 30 characters");
    }
    if ($password != $password_two) {
        array_push($errors, "The two passwords do not match");
    }

    if (count($errors) == 0) {
        $check_username = $pdo->query("SELECT username FROM users WHERE username='$username'");
        if ($check_username) {
            array_push($errors, "Username is already being used");
        } elseif (count($errors) == 0) {
            $check_email = $pdo->query("SELECT email FROM users WHERE email='$email'");
            if ($check_email) {
                array_push($errors, "Email is already being used");
            }
        }
    }
    
    if (count($errors) == 0) {
    $sql = "INSERT INTO users (username, email, password, gender) 
                    VALUES ( ?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$username, $email, $password, $gender]);

    $created = false;  
    echo "Account gemaakt :D";
    }
        
}

