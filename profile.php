<?php
session_start();
include 'config/inlog/inlog_server.php';
include 'config/profile/profile_acc.php';

if (isset($_SESSION['user'])) {} else {
    header("Location:log-in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>

<body class="profilebody">
    <header>
        <div class="nav">
            <div class="navimg">
                <a href="index.php"><img src='images/logo/cover1.png' alt="cover-logo"></a>
            </div>

            <div class="navbar">
                <nav class="bar">
                    <a href="index.php"><i class="fas fa-home"></i> HOME</a>
                    <a href="#"><i class="fas fa-clone"></i> YOUR POSTS</a>
                    <?php if (($_SESSION['user'] == 'ADMIN') || ($_SESSION['user'] == 'admin'))
                    { echo '<a href="admin.php"><i class="fas fa-user-cog"></i> ADMIN</a>';} ?>
                    <form action="profile.php" method="post">
                        <p><i class="fas fa-sign-out-alt"></i><input type="submit" name="logout" value="LOG-OUT"></p>
                    </form>

                    <?php
                    if (isset($_POST['logout'])) {
                        unset($_SESSION['user']);
                        unset($_SESSION['color']);
                        header('location:index.php');
                        exit;
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="profielbox">
            <div class="left">
                <?php
                    echo '<img src="images/logo/profile1.png" style="background:' . $color[$n] . ';" alt="Logo">';
                ?>
                <h1>
                    Welcome
                    <?php echo $_SESSION['user']; ?>
                </h1>
            </div>

            <div class="right">
                <div class="rightbox">
                    <h1>Random quote:</h1>
                    <p>
                       "<?php echo $quote[$q];?>"
                    </p>
                </div>

                <div class="rightbox">
                    <h1>Latest update:</h1>
                    <p>
                        We added your profile page! <br>
                        Be happy :D, <br> you can smile for real now..
                    </p>
                </div>
            </div>
        </div>

    </main>

    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>

</body>
</html>
