<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
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
                    </div>
                </div>
                <div class="def" id="def2">
                    <img src="images/youp.png" alt="">
                    <div class="rijen">
                        <h1>CEO - Youp</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 12345678910</span>
                    </div>
                </div>
                <div class="def" id="def3">
                    <img src="images/mark.png" alt="">
                    <div class="rijen">
                        <h1>COO - Mark</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 1234567810</span>
                    </div>
                </div>
                <div class="def" id="def4">
                    <img src="images/daan.png" alt="">
                    <div class="rijen">
                        <h1>COO - Daan</h1>
                        <span>Email: 123@gmail.com</span>
                        <span>number: 06 12345678910</span>
                    </div>
                </div>
            </div>

            <div class="contactform">
                <form action="contact.php" method="post">
                    <input type="text" name="name" id="" placeholder="Name" required>
                    <input type="email" name="email" id="" placeholder="E-mail" required>
                    <select onchange='check(this.value);'>
                        <option value="bug">Bug report</option>
                        <option value="abuse">Report abuse</option>
                        <option value="contact">Contact def' s</option>
                        <option value="other">Other...</option>
                    </select>
                    <input type="text" name="subject" id="subject" style='display:none;'/ placeholder="Subject">
                    <textarea placeholder="Discription..." required rows="13" cols="120"></textarea>
                    <input id="send" class="send" type="submit" value="submit">
                </form>
            </div>
        </div>
    </main>
    <script>
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