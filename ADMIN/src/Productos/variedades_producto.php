<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../../config/conex.php');
include('../../layout/parte_1.php');
include('../../layout/seccion.php');
include('../../app/Productos/get_datos.php');

$id_producto_color = $_GET['id'];

$SQL_TALLAS_TABLA = "SELECT * FROM TALLAS AS G INNER JOIN DET_TALLA AS F ON F.FK_Talla = G.PK_Talla WHERE F.FK_Det_Color = '$id_producto_color'";
$DATOS_TALLAS_TABLAS = $conexion->query($SQL_TALLAS_TABLA);


?>


<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <?php include('../../layout/parte_3.php'); ?>


        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Productos</h4>
                        <h6>Variedades de productos</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="requiredfield">
                            <h4>
                                Tallas de Producto
                            </h4>
                        </div>


                        <form action="../../app/Productos/guardar_variedad.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-4">




                                <div class="col-lg-6 col-sm-6 col-12">



                                    <select name=" id_talla" id="id_talla" class="form-control yselect" required>
                                        <!-- Placeholder de "Seleccione una marca" -->
                                        <option value="" disabled selected>Seleccione una Talla</option>
                                        <?php
                                        foreach ($DATOS_TALLAS as $TALLAS) { ?>
                                            <option value="<?php echo $TALLAS['PK_Talla']; ?>" data-nombre="<?php echo $TALLAS['Nombre_Talla']; ?>">
                                                <?php echo  $TALLAS['Nombre_Talla']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>





                                </div>

                                <input name="id_producto" type="hidden" value="<?php echo "$id_producto_color"; ?>">





                                <div class="col-lg-6 col-sm-6 col-12">
                                    <button type=" submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>



                        <div class="table-responsive table-height">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Valor</th>
                                        <th>STOCK</th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>

                                <?php
                                $contador = 0;
                                while ($T = $DATOS_TALLAS_TABLAS->fetch_assoc()) {
                                    $id_talla = $T['PK_Det_Talla'];
                                ?>




                                    <tbody>
                                        <tr>
                                            <td><?php echo $T['Nombre_Talla']; ?></td>
                                            <td><?php echo $T['Stock']; ?></td>

                                            <td class="text-start">
                                                <a class="delete-set"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/delete.svg" alt="img" /></a>
                                            </td>
                                        </tr>


                                    </tbody>


                                <?php
                                }
                                ?>




                            </table>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">

                                <a href="javascript:void(0);" class="btn btn-cancel">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </div>


    <?php include('../../layout/parte_2.php') ?>
    <?php include('../../layout/mensaje.php') ?>

</body>

</html>


<div id="respuesta"></div>


<!--shif alt f -->