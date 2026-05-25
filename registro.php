<?php
session_start();
include("conexion.php");

$empresa = $_POST['nombre_empresa'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$rfc = $_POST['rfc'];

// Verificar si el correo ya existe
$check = $conexion->prepare("SELECT id_usuario FROM usuarios WHERE correo = ?");
$check->bind_param("s", $correo);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "❌ El correo ya está registrado";
} else {
    $stmt = $conexion->prepare("INSERT INTO usuarios 
    (nombre_empresa, correo, password, telefono, direccion, rfc) 
    VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $empresa, $correo, $password, $telefono, $direccion, $rfc);
    $stmt->execute();

    // 🔥 Obtener ID del usuario
    $id_usuario = $conexion->insert_id;

    // 🔥 Crear sesión automática
    $_SESSION['usuario_id'] = $id_usuario;
    $_SESSION['empresa'] = $empresa;

    // 🔥 Redirigir a productos
    header("Location: pro2.php");
    exit();
}
?>