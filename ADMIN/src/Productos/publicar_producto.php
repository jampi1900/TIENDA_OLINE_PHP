<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../../config/conex.php');
include('../../layout/parte_1.php');
include('../../layout/seccion.php');
include('../../app/Productos/get_datos.php');

$id_producto_color = $_GET['id'];

$SQL_TALLAS_TABLA = "SELECT * FROM TALLAS AS G INNER JOIN DET_TALLA AS F ON F.FK_Talla = G.PK_Talla WHERE F.FK_Det_Color = '$id_producto_color'";
$DATOS_TALLAS_TABLAS = $conexion->query($SQL_TALLAS_TABLA); //PARA LA TABLA
$DATOS_TALLAS_TABLAS_1 = $conexion->query($SQL_TALLAS_TABLA); //PARA EL SELECCTOR





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
                        <h6>Se requiere Fotos para Publicar</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="requiredfield">
                            <h4>
                                PUBLICAR PRODUCTO
                            </h4>
                        </div>


                        <form action="../../app/Productos/guardar_publicar.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-4">




                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen_1" name="imagen_1" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen_2" name="imagen_2" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen_3" name="imagen_3" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen_4" name="imagen_4" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <input name="id_producto" type="hidden" value="<?php echo "$id_producto_color"; ?>">





                                <div class="col-lg-3 col-sm-6 col-12">
                                    <button type=" submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>



                        <div class="table-responsive table-height">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FOTO</th>
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