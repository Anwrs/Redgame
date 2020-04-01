<?php

    $host = 'localhost:3306';
    $db   = 'redgame';
    $user = 'redgame';
    $pass = 'TVvWpPhGLv7VGhuF';
    $charset = 'utf8mb4';

    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $pdo = new \PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    // Gebruik deze code om dingen uit de database te pakken.
    // $stmt = $pdo->query("SELECT * FROM users");
    // while ($row = $stmt->fetch()) {
    // echo $row['username']."<br />\n";
    // }
?>

