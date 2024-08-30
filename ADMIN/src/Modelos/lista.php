<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../../config/conex.php');
include('../../layout/parte_1.php');
include('../../layout/seccion.php');
include('../../app/Modelos/obtener_datos.php');



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
                        <h4>Brand List</h4>
                        <h6>Manage your Brand</h6>
                    </div>
                    <div class="page-btn">
                        <a href="<?php echo $URL; ?>ADMIN/src/Modelos/index.php" class="btn btn-added"><img
                                src="<?php echo $URL; ?>ADMIN/assets/img/icons/plus.svg"
                                class="me-2"
                                alt="img" />Add Modelo</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/search-white.svg" alt="img" /></a>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Image</th>
                                        <th>Modelo</th>
                                        <th>Marca</th>
                                        <th>Categoria</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    $contador = 0;
                                    while ($M = $DATOS_MODELOS->fetch_assoc()) {
                                        $id_modelo = $M['PK_Producto']; ?>
                                        <tr>
                                            <td><?php echo $contador = $contador + 1; ?></td>


                                            <td>
                                                <a class="product-img">
                                                    <img
                                                        src="<?php echo $URL . "ADMIN/app/Modelos/img/" . $M['Foto']; ?>" alt="product" />
                                                </a>
                                            </td>

                                            <td><?php echo $M['Nombre_Producto']; ?></td>
                                            <td><?php echo $M['Nombre_Marca']; ?></td>
                                            <td><?php echo $M['Nombre_Categoria']; ?></td>

                                            <td>
                                                <a class="me-3" href="editar_modelo?id=<?php echo $id_modelo; ?>" type="button">
                                                    <img src="<?php echo $URL; ?>ADMIN/assets/img/icons/edit.svg" alt="img" />
                                                </a>

                                                <a class="me-3 " href="#" onclick="handleDeleteClick(event, '<?php echo $URL; ?>ADMIN/app/Modelos/eliminar_modelo.php?id=<?php echo $id_modelo; ?>'); return false;">
                                                    <img src="<?php echo $URL; ?>ADMIN/assets/img/icons/delete.svg" alt="Eliminar" />
                                                </a>

                                                <!-- Modal de confirmación -->
                                                <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmModalLabel">Confirmar Eliminación</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Estás seguro de que deseas eliminar este modelo?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script>
                                                    let deleteUrl = '';

                                                    function handleDeleteClick(event, url) {
                                                        event.preventDefault(); // Evita la redirección inmediata

                                                        deleteUrl = url;

                                                        // Mostrar el modal de confirmación
                                                        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
                                                        confirmModal.show();
                                                    }

                                                    // Agregar evento de confirmación al botón en el modal
                                                    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
                                                        window.location.href = deleteUrl;
                                                    });
                                                </script>



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


<!--chif alt f -->