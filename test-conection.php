<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=sisgestionescolar", "root", "DataBase_1.", array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));
    echo "✅ Conexión exitosa con PDO.";
} catch (PDOException $e) {
    echo "❌ Error en la conexión: " . $e->getMessage();
}
?>
