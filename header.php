<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="nav">
            <div class="navimg">
                <a href="index.php"><img src='images/logo/cover1.png' alt="cover-logo"></a>
            </div>

            <div class="navbar">
                <nav class="bar">
                    <a href="index.php"><i class="fas fa-home"></i> HOME</a>
                    <a href="games.php"><i class="fas fa-gamepad"></i> GAMES</a>
                    <a href="forum.php"><i class="fas fa-sticky-note"></i> FORUM</a>
                    <a href="contact.php"><i class="fas fa-comment"></i> CONTACT</a>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<a href="profile.php"><i class="fas fa-user-circle"></i> PROFILE</a>';
                    } else {
                        echo '<a href="log-in.php"><i class="fas fa-sign-in-alt"></i> LOG-IN</a>';
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>

</html>
