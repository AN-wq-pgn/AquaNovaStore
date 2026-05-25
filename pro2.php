

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="pro2">

    <!-- HEADER -->
    <header class="HPro2">
        <a href="index_new.html" class="aSUBI">
            <img src="AquaLogo.png" alt="" class="logo">
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



    <!-- PRODUCTOS -->
    <section class="contenedor">

        <!-- TARJETA -->
        <!-- Repite este bloque 10 veces -->
        <div class="cardPro">
            <div class="inner">

                <div class="front">
                    <img src="ALMA NeoDAF Azul.jpg">
                    <h3>ALMA NeoDAF Azul</h3>

                </div>

                <div class="back">

                    <h3>ALMA NeoDAF Azul</h3>
                    <p>Flotación compacta por aire disuelto para la eliminación de impurezas disueltas mediante procesos
                        de
                        precipitación y floculación, con una etapa de filtración aguas abajo que mejora la calidad final
                        del
                        agua tratada.</p>
                    <!--<ul>

                        <li>30,000 mAh</li>
                        <li>52.2 V</li>
                        <li>+1000 ciclos</li>
                    </ul>-->
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="1">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>

            </div>
        </div>

        <!-- DUPLICA CON CAMBIOS -->

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="ALMA NeoDAF HDED.jpg">
                    <h3>ALMA NeoDAF HDED</h3>

                </div>
                <div class="back">
                    <h3>ALMA NeoDAF HDED</h3>
                    <p>El ALMA NeoDAF HDED es un sistema de flotación por aire disueltopara caudales de aguas residuales
                        de
                        12 -
                        150 m³/h.</p>
                    <!--<ul>
                        <li>12 L/min</li>
                        <li>1200W</li>
                    </ul>-->
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="2">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="ALMA OXI Fenton.jpg">
                    <h3>ALMA OXI Fenton</h3>

                </div>
                <div class="back">
                    <h3>ALMA OXI Fenton</h3>
                    <p>Proceso combinado de planta de precipitación y floculación con dosificación de peróxido de
                        hidrógeno
                        para la eliminación de DQO poco degradable y sustancias traza.</p>
                    <!--<ul>
                        <li>Alta resistencia</li>
                    </ul>-->
                    <p class="precio">$89</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="3">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="tsubI2.png">
                    <h3>ALMA NeoDAF HDK</h3>

                </div>
                <div class="back">
                    <h3>ALMA NeoDAF HDK</h3>
                    <p>Flotación por aire disuelto con pretratamiento químico-físico integrado (precipitación,
                        floculación y
                        neutralización). Permite tratar aguas residuales industriales eliminando sustancias disueltas y
                        partículas..</p>
                    <!--<ul>
                        <li>GNSS</li>
                    </ul>-->
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="4">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3>ALMA Neutra</h3>

                </div>
                <div class="back">
                    <h3>ALMA Neutra</h3>
                    <p>Sistema de neutralización automática para la corrección del pH de aguas residuales
industriales ácidas o alcalinas utilizando ácido, álcali o CO₂.</p>
                    <ul>
                        <li>Control automático de procesos mediante el software ALMA Vision</li>
                        <li>Rendimiento hidráulico: 0,5 - 100 m³/h</li>
                        <li>También disponible como sistema independiente</li>
                    </ul>
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="5">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3>Proceso OSMO de ALMA</h3>

                </div>
                <div class="back">
                    <h3>Proceso OSMO de ALMA</h3>
                    <p>Sistema industrial de ósmosis inversa instalado en un bastidor de acero inoxidable.
Solución completa totalmente automática, en caso necesario con sistema de
ablandamiento integrado y ultrafiltración aguas arriba para unas condiciones de
funcionamiento óptimas y una larga vida útil. Ideal para la recuperación de agua de
proceso y la utilización de aguas residuales tratadas en sistemas industriales de
reciclado y circulación de agua.</p>
                    <ul>
                        <li>También disponible como nanofiltración bajo pedido</li>
                        <li>Funcionamiento fiable incluso con valores SDI elevados</li>
                        <li>Rendimiento hidráulico: 1 - 100 m³/h</li>
                    </ul>
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="6">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3>ALMA BIO MBBR compacto</h3>

                </div>
                <div class="back">
                    <h3>ALMA BIO MBBR compacto</h3>
                    <p>Reactor MBBR compacto (reactor de biopelícula de lecho móvil) en diseño de
contenedor para el tratamiento biológico de aguas residuales industriales. El
proceso MBBR utiliza materiales portadores móviles para la colonización de
microorganismos y permite una reducción eficaz de la DBO, la DQO y los
compuestos nitrogenados, incluso con una composición muy fluctuante de las aguas
residuales.</p>
                    <ul>
                        <li>El proceso puede ampliarse de forma rentable mediante la integración en el módulo ALMA</li>
                        <li>Capacidad hidráulica: 10 - 100 m³/d</li>
                        <li>Reducción de la DQO de 10 a 120 kg/día con una tasa de degradación del 9</li>
                    </ul>
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="7">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3>ALMA CP Compacto</h3>

                </div>
                <div class="back">
                    <h3>ALMA CP Compacto</h3>
                    <p>Sistema CP compacto para aguas residuales pequeñas y muy concentradas con control integrado mediante un panel táctil y el software ALMA Vision.</p>
                    <ul>
                        <li>Diseño que ahorra espacio con un alto rendimiento de limpieza</li>
                            <li>Capacidad hidráulica: 0,5 - 20 m³/d</li>
                            <li>Reducción de DQO, sólidos, hidrocarburos y metales pesados</li>

                    </ul>
                    <p class="precio">$1,545,000</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="8">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <!--<div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3></h3>

                </div>
                <div class="back">
                    <h3></h3>
                    <ul>
                        <li>5km alcance</li>
                    </ul>
                    <p class="precio"></p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="9">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cardPro">
            <div class="inner">
                <div class="front">
                    <img src="#">
                    <h3>ssss</h3>

                </div>
                <div class="back">
                    <h3>ssss</h3>
                    <!--<ul>
                        <li>5km alcance</li>
                    </ul>
                    <p class="precio">$800</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="10">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>-->
    </section>


    <footer>

        <section class="Information">
            <div></div>
            <div class="footerLogo">
                <div class="logoRow">
                    <img class="logoFooter" src="AquaLogo.png" alt="">
                    <h1 class="logoFooter"><span>AquaNova</span></h1>
                </div>
                <p><span>Proveemos soluciones tecnológicas compactas y eficientes para
                        la transformación de fuentes de agua no convencionales en recursos seguros, garantizando el
                        acceso al agua potable y el saneamiento sostenible en cualquier entorno, por remoto o limitado
                        que sea.</span></p>
            </div>

            <div class="Contact">
                <h2 class="ContacTitle"><span>Contactanos!</span></h2>

                <ul class="redes">
                    <li>
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/profile.php?id=61573240187290">Facebook</a>
                    </li>
                    <li>
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.instagram.com/systems_acuanova/">Instagram</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="">Gmail</a>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>

                        <a
                            href="https://wa.me/525563408742?text=Hola%2C%20Buen%20dia%2C%20quiero%20informes%20del%20producto%20por%20favor">
                            WhatsApp
                        </a>

                    </li>
                    <li class="phone">
                        <i class="fas fa-phone"></i>
                        <a href="">Telefono</a>
                    </li>
                </ul>
            </div>
        </section>

    </footer>

</body>

</html>