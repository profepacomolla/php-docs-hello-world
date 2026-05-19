<?php

$host = "msql-cefire01.mysql.database.azure.com";
$dbname = "prueba";
$user = "prueba";
$password = "ContraseñaSegura!";

try {

    $dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=utf8mb4";

    $options = [
        PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $user, $password, $options);

    echo "CONEXIÓN OK";

} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();
}
?>
