<?php
include('../../../config/conex.php');

// Obtener el id_modelo de la URL
$id_modelo = $_GET['id'];

// Escapar el valor de $id_modelo para evitar inyecciones SQL
$id_modelo = $conexion->real_escape_string($id_modelo);

// Actualizar el estado del producto
$sql = "UPDATE Productos SET FK_Estado = '3' WHERE PK_Producto = '$id_modelo'";

// Ejecutar la consulta
$result = $conexion->query($sql);

if ($result === TRUE) {
    session_start();
    $_SESSION['mensaje'] = "Se elimino de manera correcta";
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
