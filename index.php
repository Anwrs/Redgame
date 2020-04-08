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
    <title>Welcome to Redgame!</title>
</head>

<body>
    <main class="main-home">

        <div class="main-text">
            <h1>
                <span style="font-size: 50px; display:flex; align-items:center; justify-content:center;">
                    Welcome to<img style="width:200px; position:relative; left: 15px;" src="images/logo/coverredgame.png" alt="redgame">
                </span><br>
                On our website you can talk to other dedicated gamers about your favorite game!
                You can talk about tactics, updates, new meta's and your experiences with the game.
            </h1>
        </div>

        <div class="main-games">
            <?php
                $games = [
                    ['Minecraft' => 'images/gamepics/mc.jpg'],
                    ['GTA V' => 'images/gamepics/gta.jpg'],
                    ['Rainbow Six <br> Siege' => 'images/gamepics/rs.jpg'],
                    ['CS:GO' => 'images/gamepics/cs.jpg'],
                    ['League of <br> Legends' => 'images/gamepics/lo.jpg'],
                    ['The Witcher' => 'images/gamepics/tw.jpg']
                ];
                shuffle($games);

                foreach($games as $game): ?>
                    <?php foreach($game as $title => $src): ?>
                        <div  class="gamebox">
                            <a href="games.php?game=<?= $title ?>">
                                <img src="<?= $src ?>" alt="game">
                                <?= $title ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
        </div>
    </main>
</body>

</html>
