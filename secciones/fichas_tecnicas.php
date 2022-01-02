<div class="container_bloque_informacion">
    <div class="container_bloque_informacion_titulo">
        <h3>Agregar Ficha Técnica</h3>
    </div>
    <div class="container_add_new_products">
        <div class="container_inputs_new_products">
            <div class="input_add_product">
                <input type="text" class="input_object_add_product" placeholder="Ancho del producto (cm)">
            </div>
            <div class="input_add_product">
                <input type="text" class="input_object_add_product" placeholder="Alto del producto (cm)">
            </div>
            <div class="input_add_product">
                <input type="text" class="input_object_add_product" placeholder="Peso del producto (Kg)">
            </div>
            <div class="input_add_product">
                <input type="text" class="input_object_add_product" placeholder="Color del producto">
            </div>
            <div class="input_add_product">
                <select name="" id="" class="input_object_add_product">
                <?php
                    // mostramos las categorías disponibles para no confudirse
                    $consulta_id_productos = "SELECT id_producto,marca,categoria.nombre_categoria FROM productos INNER JOIN categoria ON productos.categoria_id_categoria=categoria.id_categoria";
                    $resultado_id_productos = $conn->query($consulta_id_productos);
                    while($row = $resultado_id_productos->fetch_assoc()){?>
                    <option value="<?php echo $row["id_producto"]?>">
                        <?php echo $row["id_producto"]." - ".$row["marca"]." - ".$row["nombre_categoria"]?>
                    </option>
                <?php
                    }
                ?>
                </select>
            </div>
            <div class="input_add_product">
                <button class="boton_add_product">Guardar producto</button>
                <button class="boton_add_product">Limpiar Campos</button>
            </div>
            <div id="mensaje_confirmacion_add">
            </div>
        </div>
    </div>
</div>
<div class="container_bloque_informacion">
    <div class="container_bloque_informacion_titulo">
        <h3>Productos de la tienda</h3>
    </div>
    <div class="container_table_information">
        <table>
            <tr>
                <th>Código</th>
                <th>Ancho</th>
                <th>Alto</th>
                <th>Peso</th>
                <th>Color</th>
                <th>Opciones</th>
            </tr>
            <?php
                $consulta_productos = "SELECT * FROM ficha_tecnica";
                $resultado_productos = $conn->query($consulta_productos);
                while($row = $resultado_productos->fetch_assoc()){?>
                <tr id="row_product_info_<?php echo $row["productos_id_producto"]?>">
                <td><?php echo $row["productos_id_producto"]?></td>
                <td><?php echo $row["ancho"]?> cm</td>
                <td><?php echo $row["alto"]?> cm</td>
                <td><?php echo $row["peso"]?> Kg</td>
                <td><?php echo $row["color"]?></td>
                <td class="container_table__botones">
                    <button name="delete_date" class="button__delete_date">
                        <i class="fas fa-trash"></i>
                    </button>
                    <button name="edit_date" class="button__edit_date">
                        <i class="fas fa-edit"></i>
                    </button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>

<!-- agregamos las ventanas que vamos utilizar -->
<?php
    require_once "windows_modal/window_productos.php";
    require_once "windows_modal/window_delete.php";
?>
<script src="<?php echo $link_base_root?>/javascript/ventana_modal_delete.js"></script>
<script src="<?php echo $link_base_root?>/javascript/ventana_modal_productos.js"></script>
