<?php
session_start();

// destruir sesión
session_unset();
session_destroy();

// redirigir al login o inicio
header("Location: login.html");
exit();
?>