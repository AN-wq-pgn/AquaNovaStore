<?php
session_start();
include("conexion.php");

$id_carrito = $_POST['id_carrito'];

$sql = "DELETE FROM carrito WHERE id_carrito = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_carrito);
$stmt->execute();

header("Location: carrito.php");
exit();
?>