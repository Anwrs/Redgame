<?php
include 'header.php';
include 'config/database.php';
include 'config/contact/contact_server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Contact us!</title>
</head>

<body>
    <main>
        <div class="info">
            <div class="infomakers">
                <div class="def" id="def1">
                    <img src="images/persons/anouar.png" alt="">
                    <div class="rijen">
                        <h1>CEO - Anouar</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 12345678910</span>
                        <span class="meerinfo" id="anouar">More info</span>
                        <div id="anouar-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeAnouar" class="close">&times;</span>
                                <p>Anouar vull hier wat in...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def2">
                    <img src="images/persons/youp.png" alt="">
                    <div class="rijen">
                        <h1>CEO - Youp</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 12345678910</span>
                        <span class="meerinfo" id="youp">More info</span>
                        <div id="youp-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeYoup" class="close">&times;</span>
                                <p>Youp vull hier wat in...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def3">
                    <img src="images/persons/mark.png" alt="">
                    <div class="rijen">
                        <h1>COO - Mark</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 1234567810</span>
                        <span class="meerinfo" id="mark">More info</span>
                        <div id="mark-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeMark" class="close">&times;</span>
                                <p>Mark vull hier wat in...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def4">
                    <img src="images/persons/daan.png" alt="">
                    <div class="rijen">
                        <h1>COO - Daan</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 12345678910</span>
                        <span class="meerinfo" id="daan">More info</span>
                        <div id="daan-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeDaan" class="close">&times;</span>
                                <p>Daan vull hier wat in...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="contactform">
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Name" >
                    <input type="email" name="email" placeholder="E-mail" >
                    <input type="text" name="select" placeholder="State the problem">
                    <textarea name="onderwerp" placeholder="Discription..." rows="13" cols="120"></textarea>
                    <input id="send" name="send" class="send" type="submit" value="submit">
                </form>
            </div>
        </div>

        <?php
        include 'config/contact/contact_errors.php';
        if (isset($_POST['send'])) {
            if (count($errors) == 0) {
                echo '<div class="done">';
                echo '<p>Your problem was send!</p>';
                echo '</div>';
            }
        }
        ?>
    </main>
    <script>
        var Amodal = document.getElementById("anouar-modal");
        var Ymodal = document.getElementById("youp-modal");
        var Mmodal = document.getElementById("mark-modal");
        var Dmodal = document.getElementById("daan-modal");

        var span = document.getElementsByClassName("close")[0];

        anouar.onclick = function() {
            Amodal.style.display = "block";
        }
        youp.onclick = function() {
            Ymodal.style.display = "block";
        }
        mark.onclick = function() {
            Mmodal.style.display = "block";
        }
        daan.onclick = function() {
            Dmodal.style.display = "block";
        }

        closeAnouar.onclick = function() {
            Amodal.style.display = "none";
        }
        closeYoup.onclick = function() {
            Ymodal.style.display = "none";
        }
        closeMark.onclick = function() {
            Mmodal.style.display = "none";
        }
        closeDaan.onclick = function() {
            Dmodal.style.display = "none";
        }

        window.addEventListener("click", function(event) {
            if (event.target == Amodal) {
                Amodal.style.display = "none";
                exit;
            }

        });
        window.addEventListener("click", function(event) {
            if (event.target == Ymodal) {
                Ymodal.style.display = "none";
                exit;
            }

        });
        window.addEventListener("click", function(event) {
            if (event.target == Mmodal) {
                Mmodal.style.display = "none";
                exit;
            }

        });
        window.onclick = function(event) {
            if (event.target == Dmodal) {
                Dmodal.style.display = "none";
                exit;
            }
        }
    </script>
</body>

</html>
