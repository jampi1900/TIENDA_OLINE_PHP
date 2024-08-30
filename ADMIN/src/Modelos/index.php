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
                        <h4>Crear un Nuevo Modelo</h4>
                        <h6>Nuevo Modelo</h6>
                    </div>
                </div>



                <div class="card">
                    <div class="card-body">
                        <form action="../../app/Modelos/guardar_modelo.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input id="nombre_modelo" name="nombre_modelo" type="text" placeholder="Ingrese el modelo" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        <select name="id_categoria" id="id_categoria" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una marca" -->
                                            <option value="" disabled selected>Seleccione una categoria</option>
                                            <?php
                                            foreach ($DATOS_CATEGORIAS as $CATEGORIAS) { ?>
                                                <option value="<?php echo $CATEGORIAS['PK_Categoria']; ?>" data-nombre="<?php echo $CATEGORIAS['Nombre_Categoria']; ?>">
                                                    <?php echo  $CATEGORIAS['Nombre_Categoria']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Marca</label>
                                        <select name="id_marca" id="id_marca" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una marca" -->
                                            <option value="" disabled selected>Seleccione una marca</option>
                                            <?php
                                            foreach ($DATOS_MARCAS as $MARCAS) { ?>
                                                <option value="<?php echo $MARCAS['PK_Marca']; ?>" data-nombre="<?php echo $MARCAS['Nombre_Marca']; ?>">
                                                    <?php echo $MARCAS['Nombre_Marca']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        <select name="id_estado" id="id_estado" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una marca" -->
                                            <option value="" disabled selected>Seleccione un estado</option>
                                            <?php
                                            foreach ($DATOS_ESTADOS as $ESTADOS) { ?>
                                                <option value="<?php echo $ESTADOS['PK_Estado']; ?>" data-nombre="<?php echo $ESTADOS['Name_Estado']; ?>">
                                                    <?php echo  $ESTADOS['Name_Estado']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen" name="imagen" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Guardar</button>
                                    <a href="lista.php" class="btn btn-cancel">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>



    </div>

    <?php include('../../layout/parte_2.php') ?>
    <?php include('../../layout/mensaje.php') ?>

</body>

</html>

<!--chif alt f -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoriaSelect = document.querySelector('#id_categoria');
        const marcaSelect = document.querySelector('#id_marca');
        const estadoSelect = document.querySelector('#id_estado');
        const modeloInput = document.querySelector('#nombre_modelo');
        const btnGuardar = document.querySelector('.btn-submit');

        categoriaSelect.addEventListener('change', function() {
            updateModeloInput();
        });

        marcaSelect.addEventListener('change', function() {
            updateModeloInput();
        });

        estadoSelect.addEventListener('change', function() {
            updateModeloInput();
        });

        function updateModeloInput() {
            const categoriaNombre = categoriaSelect.options[categoriaSelect.selectedIndex].getAttribute('data-nombre');
            const marcaNombre = marcaSelect.options[marcaSelect.selectedIndex].getAttribute('data-nombre');
            const estadoNombre = estadoSelect.options[estadoSelect.selectedIndex].getAttribute('data-nombre');
            modeloInput.value = `${categoriaNombre} / ${marcaNombre} / `;
        }


    });
</script>