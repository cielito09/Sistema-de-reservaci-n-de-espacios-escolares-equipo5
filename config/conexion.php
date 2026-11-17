<?php
$host = "localhost";
$basedatos = "reservaciones_escolares";
$usuario = "labuser";
$pass = "passwd123";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$basedatos;charset=utf8mb4",
        $usuario,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch(PDOException $error) {
    echo ("Error de conexion".$error."<br>");
    die("No fue posible conectar a la base de datos.");
}
?>
