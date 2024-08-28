<?php
require_once("..\..\config\conexion.php");

session_start();

// Destruir todas las sesiones
session_destroy();

// Redirigir al usuario a la página de inicio o login
header("Location: " . Conectar::ruta() . "index.php");
exit();
?>
