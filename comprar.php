<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];

// Obtener carrito con productos
$sql = "SELECT c.id_producto, c.cantidad, p.precio
        FROM carrito c
        JOIN productos p ON c.id_producto = p.id_producto
        WHERE c.id_usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$resultado = $stmt->get_result();

$total = 0;
$productos = [];

while ($row = $resultado->fetch_assoc()) {
    $subtotal = $row['precio'] * $row['cantidad'];
    $total += $subtotal;
    $productos[] = $row;
}
$estado = "Pendiente";
// Crear pedido
$sql = "INSERT INTO pedidos (id_usuario, total, estado) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ids", $id_usuario, $total, $estado);
$stmt->execute();

$id_pedido = $conexion->insert_id;

// Insertar detalle
foreach ($productos as $p) {
    $sql = "INSERT INTO detalle_pedido (id_pedido, id_producto, cantidad, precio)
            VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("iiid", $id_pedido, $p['id_producto'], $p['cantidad'], $p['precio']);
    $stmt->execute();
}

// Vaciar carrito
$sql = "DELETE FROM carrito WHERE id_usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();


// 🔔 Notificación para admin
$mensaje = "Nuevo pedido del usuario $id_usuario (Pedido #$id_pedido)";
$sql = "INSERT INTO notificaciones (mensaje) VALUES (?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $mensaje);
$stmt->execute();

header("Location: confirmacion.php?id_pedido=$id_pedido");
exit();
?>