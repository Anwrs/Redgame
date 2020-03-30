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

    <div class="register">
        <form class="form-reg" action="log-in.php" method="post">
            <img src="images/profile1.png" alt="logo">
            
                <label for="name">Username</label>
                <input type="text" placeholder="Your username" name="username" id="" required>

                <label for="name">Email</label>
                <input type="text" placeholder="Your email" name="email" id="" required>

                <div class="gender">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                </div>
            
                <label for="password">Password</label>
                <input type="password" placeholder="Your password" name="password" id="" required>
                <input type="password" placeholder="Confirm password" name="passwordtwo" id="" required>

            <button type="submit">Sign up !</button>
        </form>

    </div>


    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>
</html>