<?php
include('../../../config/conex.php');

// Obtener los datos del formulario
$id_categoria = $_POST['id_categoria'] ?? '';
$id_marca = $_POST['id_marca'] ?? '';
$id_estado = $_POST['id_estado'] ?? '';
$nombre_modelo = $_POST['nombre_modelo'] ?? '';

$imagen = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$temp  = $_FILES['imagen']['tmp_name'];


// Generar un nuevo nombre para la imagen
$nombreDelArchivo = date("Y-m-d-h-i-s");
$nuevo_nombre = $nombreDelArchivo . "__" . $imagen;


move_uploaded_file($temp, 'img/' . $nuevo_nombre);




// Generar un ID único para el producto
$id_unico = "MOD" . uniqid();

// Construir la consulta SQL para insertar el nuevo producto
$sql_insert_modelo = "INSERT INTO PRODUCTOS (PK_Producto, Nombre_Producto, FK_Categoria, FK_Marca, FK_Estado, Foto) 
VALUES 
('$id_unico', '$nombre_modelo', '$id_categoria', '$id_marca', '$id_estado', '$nuevo_nombre')";

// Ejecutar la consulta
$result = $conexion->query($sql_insert_modelo);

if ($result === TRUE) {
    session_start();
    $_SESSION['mensaje'] = "Se guardo de manera correcta";
    $_SESSION['icono'] = "success";
?>
    <script>
        location.href = "<?php echo $URL; ?>ADMIN/src/Modelos/lista.php";
    </script>
<?php
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
?>
    <script>
        location.href = "<?php echo $URL; ?>ADMIN/src/Modelos/lista.php";
    </script>
<?php
}
