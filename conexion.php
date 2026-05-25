<?php
$host = "localhost";
$usuario = "root";
$password = ""; // en XAMPP normalmente va vacío
$bd = "aquanova_store";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>