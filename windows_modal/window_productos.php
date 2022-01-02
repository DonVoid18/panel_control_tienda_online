<div class="container_ventana_edit ventana_desactivada">
    <div class="ventana_edit">
        <div class="container_edit_title">
            <h3>Editar Producto</h3>
        </div>
        <div class="container_edit_date">
            <div class="container_edit_date__value">
                <select name="" class="input_object_add_product" id="categoria_select__value">
                    <?php
                        $resultado_categorias = $conn->query($consulta_categorias);
                        while($row = $resultado_categorias->fetch_assoc()){?>
                        <option class="option_categoria_edit_value" value="<?php echo $row["id_categoria"]?>"><?php echo $row["nombre_categoria"]?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="container_edit_date__value">
                <input type="text" placeholder="Marca del producto" class="edit_date_value__input">
            </div>
            <div class="container_edit_date__value">
                <input type="text" placeholder="Descripción del producto" class="edit_date_value__input">
            </div>
            <div class="container_edit_date__value">
                <input type="text" placeholder="Cantidad" class="edit_date_value__input">
            </div>
            <div class="container_edit_date__value">
                <input type="text" placeholder="Precio del producto (S/.)" class="edit_date_value__input">
            </div>
            <div class="container_edit_date__value">
                <input type="text" placeholder="Descuento del producto (%)" class="edit_date_value__input">
            </div>
            <div class="container_edit_date__value">
                <select name="" id="estado_oferta__product" class="input_object_add_product">
                    <option value="0" class="option_estado_oferta_value">Desactivado</option>
                    <option value="1" class="option_estado_oferta_value">Activo</option>
                </select>
            </div>
            <div class="container_edit_date__value container_edit_date__image">
                <input type="text" placeholder="URL de la imagen" class="edit_date_value__input">
            </div>
        </div>
        <div class="container_buttons_ventana">
            <button class="button__confirm_edit">Confirmar</button>
            <button class="button__cancel_edit">Cerrar</button>
        </div>
        <div id="mensaje_modificacion_values_product">
            <!-- colocar respuesta la actualización a la base de datos -->
        </div>
    </div>
</div>
