<?php
include("../../../config/conex.php");
$id_talla = $_POST['id_talla'];
$id_producto = $_POST['id_producto'];

// Generate unique ID
$unico = uniqid();
$unico = "DTA_" . $unico;

// Query to check if the combination of FK_Talla and FK_Det_Color already exists
$sql_check = "SELECT * FROM DET_TALLA WHERE FK_Talla = '$id_talla' AND FK_Det_Color = '$id_producto'";
$result_check = $conexion->query($sql_check);

if ($result_check->num_rows > 0) {
    // If record exists, set an error message
    session_start();
    $_SESSION['mensaje'] = "Error: La talla ya existe para este producto.";
    $_SESSION['icono'] = "error";
?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>ADMIN/src/Productos/variedades_producto.php?id=" + encodeURIComponent(id_producto);
    </script>
    <?php
} else {
    // If record does not exist, insert new record
    $sql_det_talla = "INSERT INTO DET_TALLA (PK_Det_Talla, Stock, FK_Talla, FK_Det_Color)
    VALUES ('$unico', 0, '$id_talla', '$id_producto')";
    $result = $conexion->query($sql_det_talla);

    if ($result === TRUE) {
        session_start();
        $_SESSION['mensaje'] = "Se guardó de manera correcta";
        $_SESSION['icono'] = "success";
    ?>
        <script>
            var id_producto = "<?php echo $id_producto; ?>";
            location.href = "<?php echo $URL; ?>ADMIN/src/Productos/variedades_producto.php?id=" + encodeURIComponent(id_producto);
        </script>
    <?php
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
        $_SESSION['icono'] = "error";
    ?>
        <script>
            var id_producto = "<?php echo $id_producto; ?>";
            location.href = "<?php echo $URL; ?>ADMIN/src/Productos/variedades_producto.php?id=" + encodeURIComponent(id_producto);
        </script>
<?php
    }
}
?>