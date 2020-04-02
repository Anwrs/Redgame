<?php 
$username = "";
$email = "";
$choise = "";
$subject = "";
$errors = "";

include 'config/database.php';

if(isset($_POST['send'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $choise = $_POST['select'];
    $subject = $_POST['onderwerp'];

    $username = strip_tags($username);
    $email = strip_tags($email);
    $choise = strip_tags($choise);
    $subject = strip_tags($subject);

    $username = htmlspecialchars($username);
    $email = htmlspecialchars($email);
    $choise = htmlspecialchars($choise);
    $subject = htmlspecialchars($subject);

    $username = htmlentities($username);
    $email = htmlentities($email);
    $choise = htmlentities($choise);
    $subject = htmlentities($subject);

    if(empty($username)){
        array_push($errors, "Username is requierd");
    }elseif (strlen($username) < 4){
        array_push($errors, "Username does not exist");
    }elseif (strlen($username) > 16){
        array_push($errors , "Username does not exist");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email adress is not valid");
    }

    $stmt = $pdo->prepare("SELECT email FROM users WHERE email=?");
    $stmt->execute([$email]); 
    $user_email = $stmt->fetch();
    if (!$user_email) {
        array_push($errors, "Email adress does not exist");
    }
    
    $stmt = $pdo->prepare("SELECT username FROM users WHERE username=?");
    $stmt->execute([$username]); 
    $user_name = $stmt->fetch();
    if (!$user_name) {
        array_push($errors, "Username does not exist");
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO problems (username, email, problem, discription) 
                        VALUES ( ?, ?, ?, ?)";
        $pdo->prepare($sql)->execute([$username, $email, $choise, $subject]);
    
        $created = false;
    }

}