<?php
$host = 'projects.bit-academy.nl:3306';
$db   = 'redgame';
$user = 'redgame';
$pass = 'TVvWpPhGLv7VGhuF';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Loggin in :)</title>
</head>

<body class="login">

    <div class="btn-home">
        <a href="index.php">
            <i class="fas fa-angle-left"></i>  
            HOME
        </a>
    </div>

    <div class="in-log">
        <form class="form-inlog" action="index.php" method="post">
            <img src="images/profile1.png" alt="logo">
            
            <div class="inp">
                <label for="name">Username</label>
                <input type="text" placeholder="Your username.." name="username" id="" required>
            </div>
            
            <div class="inb">
                <label for="password">Password</label>
                <input type="password" placeholder="Your password.." name="password" id="" required>
            </div>

            <button type="submit">Sign in</button>
        </form>

        <div class="extra">
            <a href="#"><button type="submit">Password forgotten?</button></a>
            <a href="register.php"><button type="submit">Register here!</button></a>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>
</html>