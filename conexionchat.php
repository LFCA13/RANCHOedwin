<?php
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$usuario = 'tu_usuario'; // Tu usuario de la base de datos
$contraseña = 'tu_contraseña'; // Tu contraseña de la base de datos
$base_datos = 'tu_base_de_datos'; // El nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
