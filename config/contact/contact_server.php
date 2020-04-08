<?php
$username = "";
$email = "";
$choise = "";
$subject = "";
$errors = array();
$kijk = array();


include 'config/database.php';

if (isset($_POST['send'])) {
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

    array_push($kijk, $username, $email, $choise, $subject);

    if(empty($username)){
        array_push($errors, "Username is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email adress is not valid");
    }

    if (empty($choise)){
        array_push($errors, "Subject is required");
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO problems (username, email, problem, discription)
                        VALUES ( ?, ?, ?, ?)";
        $pdo->prepare($sql)->execute([$username, $email, $choise, $subject]);
    }

}
