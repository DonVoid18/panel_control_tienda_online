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
                <?php
                    // mostramos las categorías disponibles para no confudirse
                    $consulta_categorias = "SELECT * FROM categoria";
                    $resultado_categorias = $conn->query($consulta_categorias);
                    while($row = $resultado_categorias->fetch_assoc()){?>
                    <option value="<?php echo $row["id_categoria"]?>"><?php echo $row["nombre_categoria"]?></option>
                <?php
                    }
                ?>
                </select>
            </div>
            <div class="input_add_product">
                <input type="number" class="input_object_add_product" placeholder="Precio del producto (S/.)" min="0">
            </div>
            <div class="input_add_product">
                <input type="number" class="input_object_add_product" placeholder="Descuento del producto (%)" min="0">
            </div>
            <div class="input_add_product">
                <input type="text" class="input_object_add_product" placeholder="URL de la imagen" min="0">
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
        <h3>Categorías Disponibles</h3>
    </div>
    <div class="container_table_information">
        <table>
            <tr>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            <?php
                $resultado_categorias = $conn->query($consulta_categorias);
                while($row = $resultado_categorias->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row["id_categoria"]?></td>
                    <td><?php echo $row["nombre_categoria"]?></td>
                    <td><?php
                        if($row["descripcion"]!==""){
                            echo $row["descripcion"];
                        }else{
                            echo "<span style='color: red;'>No tiene descripción.</span>";
                        }
                    ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
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
                <th>Categoría</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Desc(%)</th>
                <th>Estado oferta</th>
                <th>Opciones</th>
            </tr>
            <?php
                $consulta_productos = "SELECT productos.*,oferta.descuento, oferta.estado_oferta FROM productos INNER JOIN oferta ON productos.id_producto = oferta.productos_id_producto ORDER BY productos.categoria_id_categoria,productos.id_producto ASC";
                $resultado_productos = $conn->query($consulta_productos);
                while($row = $resultado_productos->fetch_assoc()){?>
            <tr id="row_product_info_<?php echo $row["id_producto"]?>">
                <td><?php echo $row["id_producto"]?></td>
                <td><?php echo $row["categoria_id_categoria"]?></td>
                <td class="container__table_imagen_producto">
                    <img src="<?php echo $row["imagen_producto"]?>" alt="Img.Producto">
                </td>
                <td><?php echo $row["marca"]?></td>
                <td><?php echo $row["descripcion"]?></td>
                <td><?php echo $row["cantidad"]?></td>
                <td><?php echo $row["precio"]?></td>
                <td><?php echo $row["descuento"]?></td>
                <td><?php
                    if($row["estado_oferta"]==="1"){
                        echo "<span>Activo</span>";
                    }else{
                        echo "<span style='color:red;'>Desactivado</span>";
                    }
                ?></td>
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
<script src="<?php echo $link_base_root?>/javascript/productos/ventana_modal_delete.js"></script>
<script src="<?php echo $link_base_root?>/javascript/productos/ventana_modal_productos.js"></script>
<script src="<?php echo $link_base_root?>/javascript/productos/add_information.js"></script>
