<?php
    require_once "php/head.php";
?>
</head>
<body>
    <div class="container_panel_control">

        <!-- incluir las secciones -->
        <?php
            require_once "php/secciones_menu.php";
        ?>
        <div class="container_panel_control_principal">
            <!-- includir el nombre del administrador -->
            <?php
                require_once "php/name_usuario.php";
            ?>
            <div class="container_panel_control_principal_informacion">
                <div class="container_bloque_informacion">
                    <div class="container_bloque_informacion_titulo">
                        <h3>Agregar nuevo producto</h3>
                    </div>
                    <div class="container_add_new_products">
                        <div class="container_inputs_new_products">
                            <div class="input_add_product">
                                <input type="text" class="input_object_add_product" placeholder="Marca del producto">
                            </div>
                            <div class="input_add_product">
                                <input type="text" class="input_object_add_product" placeholder="Descripción del producto">
                            </div>
                            <div class="input_add_product">
                                <input type="number" class="input_object_add_product" placeholder="Cantidad" min="0">
                            </div>
                            <div class="input_add_product">
                                <select name="" id="" class="input_object_add_product">
                                    <option value="">Gaming</option>
                                    <option value="">Televisores</option>
                                    <option value="">Celulares</option>
                                </select>
                            </div>
                            <div class="input_add_product">
                                <input type="number" class="input_object_add_product" placeholder="Precio del producto (S/.)" min="0">
                            </div>
                            <div class="input_add_product">
                                <input type="number" class="input_object_add_product" placeholder="Descuento del producto (%)" min="0">
                            </div>
                            <div class="input_add_product">
                                <button class="boton_add_product">Limpiar Campos</button>
                                <button class="boton_add_product">Guardar producto</button>
                            </div>
                        </div>
                        <div class="container_input_imagen_product">
                            <img src="imagenes/producto-sin-imagen.png" alt="Imagen del producto">
                            <input type="file" class="input__image_product">
                        </div>
                    </div>
                </div>
                <div class="container_bloque_informacion">
                    <div class="container_bloque_informacion_titulo">
                        <h3>Productos de la tienda</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once "php/footer.php";
?>