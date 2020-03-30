<?php
include 'header.php';

?>
<?php
$servername = "https://projects.bit-academy.nl:3306";
$username = "redgame";
$password = "TVvWpPhGLv7VGhuF";

try {
    $conn = new PDO("mysql:host=$servername;dbname=redgame", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <title>Forum Page</title>
</head>

<body>
    <main>
        
    </main>
    <script>

    </script>
</body>

</html>