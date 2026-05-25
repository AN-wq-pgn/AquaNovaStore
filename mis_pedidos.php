<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];

$sql = "SELECT * FROM pedidos WHERE id_usuario = ? ORDER BY fecha DESC";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css?v=6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="mis_pedidos">
  <header class="HPro2">
        <a href="index_new.html" class="aSUBI">
            <img src="imagenes/AquaLogo.png" alt="" class="logo">
            <h1>AquaNova</h1>
        </a>
        <nav class="NPro2">

   

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
                    <a href="pro2.php">Productos </a>

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


<h2> Mis pedidos</h2>

<?php while($pedido = $resultado->fetch_assoc()): ?>


<section class="pedido-cards">
<div class="pedido-card">

    <h3>Pedido #<?php echo $pedido['id_pedido']; ?></h3>

    <p><strong>Total:</strong> $<?php echo $pedido['total']; ?></p>
    <p><strong>Estado:</strong> <?php echo $pedido['estado']; ?></p>
    <p><strong>Fecha:</strong> <?php echo $pedido['fecha']; ?></p>

    <a class="btn-detalle" href="ver_pedido.php?id=<?php echo $pedido['id_pedido']; ?>">
        <span>Ver detalles</span>
    </a>

</div>
</section>
<?php endwhile; ?>

</body>
</html>