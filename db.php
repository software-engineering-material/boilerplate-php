<?php

try {
    $user = "root";
    $pass = "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $pdo = new PDO('mysql:host=localhost;dbname=learned', $user, $pass, $options);

    // echo "Success connect to DB" . PHP_EOL;
} catch (PDOException $th) {
    echo "Failed to connect DB";
}
