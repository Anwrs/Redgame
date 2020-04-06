<?php 
session_start();
include 'inlog_server.php';

if (isset($_SESSION['user'])) {} else {
    header("Location:log-in.php");
    exit;
}

$color = array('#000000', '#00cc99', '#0099ff', '#ffcc00', '#ff0066', '#cc00cc', '#cc0000');
$n = $_SESSION['color'];

$quote = array(
    'Be yourself; everyone else is already taken.', 
    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.",
    'A room without books is like a body without a soul.',
    "Good, better, best. Never let it rest. 'Til your good is better and your better is best.",
    'Failure will never overtake me if my determination to succeed is strong enough.',
    'Life is 10% what happens to you and 90% how you react to it.',
    'Before you judge a man, walk a mile in his shoes. After that who cares?... He’s a mile away and you’ve got his shoes!',
    'The difference between stupidity and genius is that genius has its limits.',
    'The average dog is a nicer person than the average person.',
    'If you want your children to listen, try talking softly to someone else.',
    "I'm not like a huge gamer myself. I like 'Mario Kart!'",
    'You always want to put your character through different experiences and see how it shapes their worldview.'
    ); 
$q = rand(0, (count($quote)-1));
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

<body>
    <header>
        <div class="nav">
            <div class="navimg">
                <a href="index.php"><img src='images/cover1.png' alt="cover-logo"></a>
            </div>

            <div class="navbar">
                <nav class="bar">
                    <a href="index.php"><i class="fas fa-home"></i> HOME</a>
                    <a href="#"><i class="fas fa-clone"></i> YOUR POSTS</a>
                    <?php if ($_SESSION['user'] == 'ADMIN'){ echo '<a href="#"><i class="fas fa-user-cog"></i> ADMIN</a>';} ?> 
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
                    echo '<img src="images/profile1.png" style="background:' . $color[$n] . ';" alt="Logo">';
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
