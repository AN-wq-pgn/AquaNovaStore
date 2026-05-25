<?php
include("conexion.php");

$id_pedido = $_GET['id'];

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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body >

    <!-- HEADER -->
    <header class="HPro2">
        <a href="index_new.html" class="aSUBI">
            <img src="imagenes/AquaLogo.png" alt="" class="logo">
            <h1>AquaNova</h1>
        </a>
        <nav class="NPro2">

     <?php session_start(); ?>

<div class="user-menu">

  <?php if (isset($_SESSION['usuario_id'])): ?>
    
    <span class="hello">Hola, <?php echo $_SESSION['empresa']; ?>!!</span>
    <a href="logout.php" class="close">Cerrar sesión</a>

 <?php else: ?>
    
    <a href="login.html">Iniciar sesión</a>

 <?php endif; ?>

    
        <nav class="nav">
            <ul>
                <li>
                    <a href="index_new.html">Inicio</a>
                </li>


                <li>
                    <a href="subI.html">Sobre Nosotros</a>

                </li>
                <li>
                    
                    <a href="carrito.php">
                        <i class="fa-solid fa-cart-shopping"></i>Carrito
                    </a>
                </li>
                <li>
                    <a href="mis_pedidos.php"> 
                        <i class="fa-solid fa-box"></i>Mis pedidos
                    </a>
                  </li>
                <li>
                    <a href="#">Contacto ▼</a>
                    <ul>
                        <li>
                            <i class="fab fa-instagram"></i>
                            <a href="https://www.instagram.com/systems_acuanova/">Instagram</a>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=61573240187290">Facebook</a></li>
                        <li>
                            <a
                                href="https://wa.me/525563408742?text=Hola%2C%20Buen%20dia%2C%20quiero%20informes%20del%20producto%20por%20favor">
                                WhatsApp
                            </a>
                         </li>
                </li>
            
            </ul>

 </nav>
        </nav>
    </div>
    </header>

<body class="VerPedido">
    

<h2 class="Detalle">📦 Detalle del pedido</h2>

<ul class="pedido">
<?php while($row = $resultado->fetch_assoc()): ?>
    <li>
        <?php echo $row['nombre']; ?> 
        - Cantidad: <?php echo $row['cantidad']; ?> 
        - $<?php echo $row['precio']; ?>
    </li>
<?php endwhile; ?>
</ul>

<a class="MP" href="mis_pedidos.php">← Volver</a>

</body>