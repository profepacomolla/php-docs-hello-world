<?php

$host = getenv("DB_HOST");
$db   = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");
$port = getenv("DB_PORT");

echo "HOST=" . $host . "<br>";
echo "DB=" . $db . "<br>";
echo "USER=" . $user . "<br>";
echo "PORT=" . $port . "<br><br>";

try {

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    $options = [
        PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

    echo "CONEXIÓN OK";

} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();
}
?>
