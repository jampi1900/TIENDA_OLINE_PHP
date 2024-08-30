<?php

include("../../../config/conex.php");
$id_producto = $_POST['id_producto'];

// Procesar Imagen 1
$imagen_1 = $_FILES['imagen_1']['name'];
$temp_1  = $_FILES['imagen_1']['tmp_name'];
$nombreDelArchivo_1 = date("Y-m-d-H-i-s");
$nuevo_nombre_1 = $nombreDelArchivo_1 . "__" . $imagen_1;
move_uploaded_file($temp_1, 'img/' . $nuevo_nombre_1);

// Procesar Imagen 2
$imagen_2 = $_FILES['imagen_2']['name'];
$temp_2  = $_FILES['imagen_2']['tmp_name'];
$nombreDelArchivo_2 = date("Y-m-d-H-i-s");
$nuevo_nombre_2 = $nombreDelArchivo_2 . "__" . $imagen_2;
move_uploaded_file($temp_2, 'img/' . $nuevo_nombre_2);

// Procesar Imagen 3
$imagen_3 = $_FILES['imagen_3']['name'];
$temp_3  = $_FILES['imagen_3']['tmp_name'];
$nombreDelArchivo_3 = date("Y-m-d-H-i-s");
$nuevo_nombre_3 = $nombreDelArchivo_3 . "__" . $imagen_3;
move_uploaded_file($temp_3, 'img/' . $nuevo_nombre_3);

// Procesar Imagen 4
$imagen_4 = $_FILES['imagen_4']['name'];
$temp_4  = $_FILES['imagen_4']['tmp_name'];
$nombreDelArchivo_4 = date("Y-m-d-H-i-s");
$nuevo_nombre_4 = $nombreDelArchivo_4 . "__" . $imagen_4;
move_uploaded_file($temp_4, 'img/' . $nuevo_nombre_4);

// Ejecutar la consulta SQL para actualizar las imágenes
$sql_r = "UPDATE DET_COLOR SET IMG_1 = '$nuevo_nombre_1',FK_Estado='8', IMG_2 = '$nuevo_nombre_2', IMG_3 = '$nuevo_nombre_3', IMG_4 = '$nuevo_nombre_4' WHERE PK_Det_Color = '$id_producto'";

if ($conexion->query($sql_r) === TRUE) {
    echo "Las imágenes se actualizaron correctamente.";
} else {
    echo "Error al actualizar las imágenes: " . $conexion->error;
}
