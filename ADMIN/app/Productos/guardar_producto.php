<?php
include('../../../config/conex.php');

// Obtener los datos del formulario
$MODELO = $_POST['nombre_modelo'] ?? '';
$ETIQUETA = $_POST['id_etiqueta'] ?? '';
$PRECIO = $_POST['precio'] ?? '';
$OFERTA = $_POST['precio_oferta'] ?? '';
$COLOR = $_POST['id_color'] ?? '';
$SKU = $_POST['SKU'] ?? '';
$DESCRIPCION = $_POST['descripcion'] ?? '';

$Categoria = $_POST['id_categoria'] ?? '';

$Marca = $_POST['id_marca'] ?? '';





$imagen = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$temp  = $_FILES['imagen']['tmp_name'];


// Generar un nuevo nombre para la imagen
$nombreDelArchivo = date("Y-m-d-h-i-s");
$nuevo_nombre = $nombreDelArchivo . "__" . $imagen;
move_uploaded_file($temp, 'img/' . $nuevo_nombre);




// Generar un ID único para el producto
//$id_unico = "MOD" . uniqid();



$sql_insert_producto = "INSERT INTO DET_COLOR (PK_Det_Color, PORTADA, FyH, 
FK_Etiqueta, FK_Color, FK_Estado, Precio, Precio_Oferta, Descripcion
,Nombre_Producto,FK_Categoria,FK_Marca)
VALUES
('$SKU','$nuevo_nombre', '$FECHA','$ETIQUETA', '$COLOR','1',$PRECIO , $OFERTA, '$DESCRIPCION',
'$MODELO','$Categoria','$Marca')";


// Ejecutar la consulta
$result = $conexion->query($sql_insert_producto);

if ($result === TRUE) {
    session_start();
    $_SESSION['mensaje'] = "Se guardo de manera correcta";
    $_SESSION['icono'] = "success";
?>
    <script>
        location.href = "<?php echo $URL; ?>ADMIN/src/Productos/index.php";
    </script>
<?php
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
?>
    <script>
        location.href = "<?php echo $URL; ?>ADMIN/src/Productos/index.php";
    </script>
<?php
}
