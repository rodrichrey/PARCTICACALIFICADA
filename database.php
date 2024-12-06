<?php
$host = 'localhost';
$db = 'sistema_seguimiento';
$user = 'root'; // Cambia esto según tu configuración
$pass = ''; // Cambia esto según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
