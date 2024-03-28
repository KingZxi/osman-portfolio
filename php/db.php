<?php
//Load environment variables from .env file
$env = parse_ini_file('../.env');
$servername = $env["DB_HOST"];
$dbname = $env["DB_NAME"];
$username = $env["DB_USER"];
$password = $env["DB_PASSWORD"];
$port = $env["DB_PORT"];

//Set PDO options
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password, $opt);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}