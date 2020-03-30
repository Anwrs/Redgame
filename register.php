<?php
$servername = "https://projects.bit-academy.nl/phpMyAdmin/:3306";
$username = "redgame";
$password = "TVvWpPhGLv7VGhuF";

try {
    $conn = new PDO("mysql:host=$servername;dbname=redgame", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
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
            $errors = array();
            $name = $email = $gender = $password = $passwordtwo = "";

            if(isset($_POST['create'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $password = $_POST['password'];
                $passwordtwo = $_POST['passwordtwo'];

                if(empty($name)) {
                    $errors['username'] = "Username is Required!";
                }
                if(empty($email)) {
                    $errors['email'] = "Email is Required!";
                }
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Email Adress is not valid!";
                }
                if(empty($gender)) {
                    $errors['gender'] = "Gender is Required!";
                }
                if(empty($password)) {
                    $errors['password'] = "Password is Required!";
                }
                if(empty($name)) {
                    $errors['passwordtwo'] = "Confirmd password is Required!";
                }
             
                if($password !== $passwordtwo) {
                    $errors['password'] = "The two passwords do not match";
                }
                


            }
        ?>
    </div>


    <div class="register">
        <form class="form-reg" action="register.php" method="post">
            <img src="images/profile1.png" alt="logo">
            
                <label for="name">Username</label>
                <input type="text" placeholder="Your username" name="username" id="" required>

                <label for="name">Email</label>
                <input type="text" placeholder="Your email" name="email" id="" required>

                <div class="gender">
                    <label for="gender">Gender</label>
                    <div>
                        <input type="radio" id="bol" name="gender" value="female">Female
                        <input type="radio" id="bol" name="gender" value="male">Male
                    </div>
                </div>
            
                <label for="password">Password</label>
                <input type="password" placeholder="Your password" name="password" id="" required>
                <input type="password" placeholder="Confirm password" name="passwordtwo" id="" required>

            <button type="submit" name="create">Sign up !</button>
        </form>

    </div>


    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>
</html>