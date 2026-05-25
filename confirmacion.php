<?php
session_start();
include("conexion.php");

if (!isset($_GET['id_pedido'])) {
    header("Location: pro2.php");
    exit();
}

$id_pedido = $_GET['id_pedido'];

// Obtener info del pedido
$sql = "SELECT * FROM pedidos WHERE id_pedido = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_pedido);
$stmt->execute();
$pedido = $stmt->get_result()->fetch_assoc();

// Obtener productos del pedido
$sql = "SELECT d.cantidad, d.precio, p.nombre
        FROM detalle_pedido d
        JOIN productos p ON d.id_producto = p.id_producto
        WHERE d.id_pedido = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_pedido);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css?v=5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="confirmacion">
<section class="venta">
  <h2><i class="fa-solid fa-square-check"  style="color: #00ff88;"></i> Compra realizada</h2>

<p>Pedido #<?php echo $id_pedido; ?></p>
<p>Total: $<?php echo $pedido['total']; ?></p>

<h3>Productos:</h3>

<ul>
<?php while($row = $resultado->fetch_assoc()): ?>
    <li>
        <?php echo $row['nombre']; ?> 
        - Cantidad: <?php echo $row['cantidad']; ?> 
        - $<?php echo $row['precio']; ?>
    </li>
<?php endwhile; ?>
</ul>

<h3>📦 Estado: En proceso</h3>
</section>
<a class="SC" href="pro2.php">Seguir comprando</a>

</body>
</html>