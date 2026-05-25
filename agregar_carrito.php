<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];
$id_producto = $_POST['id_producto'];

include("conexion.php");

// Verificar si ya está en carrito
$sql = "SELECT * FROM carrito WHERE id_usuario = ? AND id_producto = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ii", $id_usuario, $id_producto);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si ya existe, aumenta cantidad
    $sql = "UPDATE carrito SET cantidad = cantidad + 1 WHERE id_usuario = ? AND id_producto = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ii", $id_usuario, $id_producto);
    $stmt->execute();
} else {
    // Si no existe, lo inserta
    $sql = "INSERT INTO carrito (id_usuario, id_producto, cantidad) VALUES (?, ?, 1)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ii", $id_usuario, $id_producto);
    $stmt->execute();
}

header("Location: pro2.php");
?>