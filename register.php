<?php 
include 'config/database.php';
include 'config/server.php';
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

    <div class="errorbox">
    <?php
    include ('config/errors.php');
    ?>  
    </div>  

    <div class="register">
        <form class="form-reg" action="register.php" method="post">
            <img src="images/profile1.png" alt="logo">
            
            <label <?php if ($created = false){ echo 'style="display:none;"'; } ?> for="name">Username</label>
            <input <?php if ($created = false){ echo 'style="display:none;"'; } ?> type="text" placeholder="Your username" name="username">

            <label <?php if ($created = false){ echo 'style="display:none;"'; } ?> for="name">Email</label>
            <input <?php if ($created = false){ echo 'style="display:none;"'; } ?> type="text" placeholder="Your email" name="email">

            <div <?php if ($created = false){ echo 'style="display:none;"'; } ?> class="gender">
                <label for="gender">Gender</label>
                <div>
                    <input type="radio" id="bol" name="gender" value="female">Female
                    <input type="radio" id="bol" name="gender" value="male">Male
                </div>
            </div>
            
            <label <?php if ($created = false){ echo 'style="display:none;"'; } ?> for="password">Password</label>
            <input <?php if ($created = false){ echo 'style="display:none;"'; } ?> type="password" placeholder="Your password" name="password">
            <input <?php if ($created = false){ echo 'style="display:none;"'; } ?> type="password" placeholder="Confirm password" name="password_two">

            <button <?php if ($created = false){ echo 'style="display:none;"'; } ?> type="submit" name="create">Sign up !</button>
        </form>

    </div>


    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>
</html>