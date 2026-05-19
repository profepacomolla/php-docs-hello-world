<?php

$host = "msql-cefire01.mysql.database.azure.com";
$dbname = "prueba";
$user = "prueba";
$password = "ContraseñaSegura!";

try {

    $pdo = new PDO(
        "mysql:host=$host;port=3306;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );

    echo "CONEXIÓN OK";

} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();
}
?>
