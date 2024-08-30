<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../../config/conex.php');
include('../../layout/parte_1.php');
include('../../layout/seccion.php');
include('../../app/Productos/get_datos.php');


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
                        <h4>Lista de Productos</h4>
                        <h6>Mostrando todos tus productos</h6>
                    </div>
                    <div class="page-btn">
                        <a href="nuevo.php" class="btn btn-added"><img
                                src="../../assets/img/icons/plus.svg"
                                alt="img"
                                class="me-1" />Nuevo Producto</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">

                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="../../assets/img/icons/search-white.svg" alt="img" /></a>
                                </div>
                            </div>

                        </div>



                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>

                                        <th>Nombre Producto</th>
                                        <th>SKU</th>
                                        <th>Marca</th>
                                        <th>Color</th>
                                        <th>Precio</th>
                                        <th>Precio Oferta</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <?php
                                    $contador = 0;
                                    while ($M = $DATOS_PRODUCTOS->fetch_assoc()) {
                                        $id_producto = $M['PK_Det_Color'];
                                    ?>



                                        <tr>

                                            <td class="productimgname">
                                                <div>
                                                    <a href="" class="product-img"><img
                                                            src="<?php echo $URL . "ADMIN/app/Productos/img/" . $M['PORTADA']; ?>"
                                                            alt="product" />

                                                </div>


                                                <div>
                                                    <div>
                                                        <p><?php echo $M['Nombre_Producto']; ?></p>
                                                    </div>

                                                    <style>
                                                        /* Agrega esto a tu hoja de estilos CSS */

                                                        .small-btn {
                                                            font-size: 12px;
                                                            /* Ajusta el tamaño de la fuente para hacer el botón más pequeño */
                                                            padding: 1px 3px;
                                                            /* Ajusta el relleno del botón según tus preferencias */
                                                        }
                                                    </style>

                                                    <div
                                                        class="col-2 col-sm-4 col-md-2 col-xl mb-3 mb-l-0">
                                                        <p><?php if ($M['PK_Estado'] == '1') {
                                                            ?>

                                                                <button
                                                                    type="button"
                                                                    class="btn btn-warning  btn-sm active small-btn">
                                                                    No Publicado
                                                                </button>

                                                            <?php

                                                            } else {
                                                            ?>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-outline-success btn-sm active small-btn">
                                                                    Publicado
                                                                </button>
                                                            <?php

                                                            }; ?>
                                                        </p>



                                                    </div>
                                                </div>
                                            </td>

                                            <td><?php echo $M['PK_Det_Color']; ?></td>
                                            <td><?php echo $M['Nombre_Marca']; ?></td>
                                            <td><?php echo $M['Nombre_Color']; ?></td>
                                            <td><?php echo $M['Precio']; ?></td>
                                            <td><?php echo $M['Precio_Oferta']; ?></td>

                                            <td>





                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm">Acciones</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="inventario_producto.php?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Inventario</a>
                                                        <a href="variedades_producto.php?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Variedades</a>
                                                        <a href="editar_producto?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Editar</a>
                                                        <a href="borrar_producto?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Borrar</a>
                                                        <a href="publicar_producto.php?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Publicar</a>
                                                        <a href="ver_producto?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Ver</a>
                                                        <a href="ver_producto?id=<?php echo $id_producto; ?>" type="button" class="dropdown-item">Ocultar Producto</a>

                                                        <br>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>




                                            </td>
                                        </tr>



                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
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