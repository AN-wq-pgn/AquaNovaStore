<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];

$sql = "SELECT c.id_carrito, c.cantidad, 
               p.nombre, p.precio, p.imagen
        FROM carrito c
        JOIN productos p ON c.id_producto = p.id_producto
        WHERE c.id_usuario = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$resultado = $stmt->get_result();

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleP.css?v=9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="carrito">
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
                    <a href="pro2.php">Productos </a>

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


<h2>  <i class="fa-solid fa-cart-shopping"></i> Tu carrito</h2>

<div class="contenedor">

<?php while($row = $resultado->fetch_assoc()): 
    $subtotal = $row['precio'] * $row['cantidad'];
    $total += $subtotal;
?>

<div class="card">
    <div class="inner">

        <div class="front">
            <img src="<?php echo $row['imagen']; ?>">
            <h3><?php echo $row['nombre']; ?></h3>
        </div>

        <div class="back">
            <p>Precio: $<?php echo $row['precio']; ?></p>
            <p>Cantidad: <?php echo $row['cantidad']; ?></p>
            <p>Subtotal: $<?php echo $subtotal; ?></p>

            <!-- ELIMINAR -->
            <form action="eliminar_producto.php" method="POST">
                <input type="hidden" name="id_carrito" value="<?php echo $row['id_carrito']; ?>">
                <button type="submit">Eliminar</button>
            </form>

        </div>

    </div>
</div>

<?php endwhile; ?>

</div>

<h2>Total: $<?php echo $total; ?></h2>
<form action="comprar.php" method="POST">
    <button type="submit">Finalizar compra</button>
    <a  href="pro2.php"></a>
</form>

<a class="Seguir" href="pro2.php">← Seguir comprando</a>

</body>
</html>