<?php
include 'header.php';
include 'config/database.php';
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
                    <img src="images/anouar.png" alt="">
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
                    <img src="images/youp.png" alt="">
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
                    <img src="images/mark.png" alt="">
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
                    <img src="images/daan.png" alt="">
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
                    <input type="text" name="name" id="" placeholder="Name" required>
                    <input type="email" name="email" id="" placeholder="E-mail" required>
                    <select onchange='check(this.value);'>
                        <option name='select' value="contactDevelopers">Contact developers</option>
                        <option name='select' value="reportBug">Report bug</option>
                        <option name='select' value="reportUser">Report user</option>
                        <option name='select' value="other">Other...</option>
                    </select>
                    <input type="text" name="subject" id="subject" style='display:none;'/ placeholder="Subject">
                    <textarea name="onderwerp" placeholder="Discription..." required rows="13" cols="120"></textarea>
                    <input id="send" name="send" class="send" type="submit" value="submit">
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['send'])) {
            $naam = $_POST['name'];
            $email = $_POST['email'];
            $keuze = $_POST['select'];
            $subject = $_POST['subject'];
            $onderwerp = $_POST['onderwerp'];
            $contactopnemen = array($naam, $email, $keuze, $subject, $onderwerp);
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
        // boven = modal only!

        function check(val) {
            var element = document.getElementById('subject');
            if (val == 'other')
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    </script>
</body>

</html>