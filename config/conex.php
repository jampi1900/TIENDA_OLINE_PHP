<?php
$host = "localhost";
$usuario = "root";
$contraseña = "1234";
$base_de_datos = "tienda_oline";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$URL = "http://localhost:8080/COMPRAS/";
$FECHA = date("Y-m-d H:i:s"); 

//echo "Conexión exitosa";
