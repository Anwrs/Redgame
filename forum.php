<?php
include 'header.php';
// include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/forum.css">
    <title>Forum Page</title>
</head>

<body>
    <main>
        <div class="make_post">
            <i class="fas fa-plus"></i>
        </div>

        <div class="allPosts">
            <?php
            // bij behorend bestant linken.
            echo "
                <div class='post'>
                    <h1>Deze game is echt top, 10/10 zou hem zeker aan raden!</h1>
                    <div class='rea'><a id='responding_page' href='https://www.google.com/' target='_blank'>Respond!</a></div>
                    <div class='like'><i class='fas fa-heart'></i><a>like</a> [0]</div>
                    <div class='dislike'><i class='fas fa-heart-broken'></i><a>dislike</a> [0]</div>
                </div>";
            // de '0' moet worden verandert naar de corecte hoeveelheid, dit gaat met de database.
            // de classes die ge echot moeten worden om de post te laten zien.
            ?>
        </div>
    </main>
    <script>

    </script>
</body>

</html>
