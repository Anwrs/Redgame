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
    <title>Welkom op redgame!</title>
</head>

<body>
    <main class="main-home">

        <div class="main-text">
            <h1>
                <span style="font-size: 50px; display:flex; align-items:center; justify-content:center;">
                    Welkom op<img style="width:200px; position:relative; left: 15px;" src="images/coverredgame.png"
                        alt="redgame">
                </span><br>
                Op onze website kun je met andere gedediceerde gamers praten over jou favoriete spel!
                Je kan het hebben over tactieken, updates, nieuwe meta's en jou ervaringen over de game.
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
        <img src="images/gta.jpg" alt="game">
        Gta
        </a>
        </div>';

        $rs = '<div  class="gamebox">
        <a href="">
        <img src="images/rs.jpg" alt="game">
        R6S
        </a>
        </div>';

        $lol = '<div  class="gamebox">
        <a href="">
        <img src="images/lol.jpg" alt="game">
        League of Legends
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

        $ar = array($mc,$rs,$gta,$cs,$tw,$lol);
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