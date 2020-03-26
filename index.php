<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Welcome on Redgame!</title>
</head>

<body>
    <main class="main-home">

        <div class="main-text">
            <h1>
                <span style="font-size: 50px; display:flex; align-items:center; justify-content:center;">
                    Welcome on<img style="width:200px; position:relative; left: 15px;" src="images/coverredgame.png" alt="redgame">
                </span><br>
                On our website you can talk to other dedicated gamers about your favorite game!
                You can talk about tactics, updates, new meta's and your experiences with the game.
            </h1>
        </div>

        <div class="main-games">
            <?php
            $mc = '<div  class="gamebox">
        <a href="">
        <img src="images/mc.jpg" alt="game">
        Minecraft
        </a>
        </div>';

            $gta = '<div  class="gamebox">
        <a href="">
        <img src="images/gtacover.jpg" alt="game">
        GTA V
        </a>
        </div>';

            $rs = '<div  class="gamebox">
        <a href="">
        <img src="images/rs.jpg" alt="game">
        Rainbow Six<br>Siege
        </a>
        </div>';

            $lol = '<div  class="gamebox">
        <a href="">
        <img src="images/lo.jpg" alt="game">
        League of<br> Legends
        </a>
        </div>';

            $cs = '<div  class="gamebox">
        <a href="">
        <img src="images/cs.jpg" alt="game">
        CS:GO
        </a>
        </div>';

            $tw = '<div  class="gamebox">
        <a href="">
        <img src="images/tw.jpg" alt="game">
        The witcher
        </a>
        </div>';

            $ar = array($mc, $rs, $gta, $cs, $tw, $lol);
            shuffle($ar);

            echo ($ar[0]);
            echo ($ar[1]);
            echo ($ar[2]);
            echo ($ar[3]);
            echo ($ar[4]);
            echo ($ar[5]);
            ?>
        </div>
    </main>
</body>

</html>