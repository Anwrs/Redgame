<?php 
include 'config/database.php';
include 'config/register/register_server.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Register now</title>
</head>

<body class="login">

    <div class="btn-reg">
        <a href="log-in.php">
            <i class="fas fa-angle-left"></i>  
            LOGIN
        </a>
    </div>

    <div>
    <?php
    include ('config/register/register_errors.php');
    ?>  
    </div>

    <div>
    <?php
    if (isset($_POST['create'])) {
        if (count($errors) == 0) {
            echo '<div class="done">';
            echo '<p>Your account was made!</p>';
            echo '<p>Welcome ' . $username . '!</p>';
            echo '</div>';
        }
    }
    ?>
    </div>

    <div class="register">
        <form class="form-reg" action="register.php" method="post">
            <img src="images/profile1.png" alt="logo">
            
            <label for="name">Username</label>
            <input type="text" placeholder="Your username" name="username">

            <label for="name">Email</label>
            <input type="text" placeholder="Your email" name="email">

            <div class="gender">
                <label for="gender">Gender</label>
                <div>
                    <input type="radio" id="bol" name="gender" value="female">Female
                    <input type="radio" id="bol" name="gender" value="male">Male
                </div>
            </div>
            
            <label for="password">Password</label>
            <input type="password" placeholder="Your password" name="password">
            <input type="password" placeholder="Confirm password" name="password_two">

            <button type="submit" name="create">Sign up !</button>
        </form>

    </div>


    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>
</html>