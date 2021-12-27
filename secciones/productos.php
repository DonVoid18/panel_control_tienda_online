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
                <button class="boton_add_product">Guardar producto</button>
                <button class="boton_add_product">Limpiar Campos</button>
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
                // mostramos las categorías disponibles para no confudirse
                $consulta_categorias = "SELECT * FROM categoria";
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
                <th>Descuento</th>
                <th>Fecha Registro</th>
                <th>Opciones</th>
            </tr>
            <?php
                $consulta_productos = "SELECT productos.*,oferta.descuento FROM productos INNER JOIN oferta on productos.id_producto = oferta.productos_id_producto";
                $resultado_productos = $conn->query($consulta_productos);
                while($row = $resultado_productos->fetch_assoc()){?>
            <tr>
                <td><?php echo $row["id_producto"]?></td>
                <td><?php echo $row["categoria_id_categoria"]?></td>
                <td class="container__table_imagen_producto">
                    <img src="<?php echo $row["imagen_producto"]?>" alt="Img.Producto">
                </td>
                <td><?php echo $row["marca"]?></td>
                <td><?php echo $row["descripcion"]?></td>
                <td><?php echo $row["cantidad"]?></td>
                <td><?php echo $row["precio"]?></td>
                <td><?php echo $row["descuento"]?>%</td>
                <td><?php echo $row["fecha_registro"]?></td>
                <td class="container_table__botones">
                    <button>
                        <i class="fas fa-trash"></i>
                    </button>
                    <button>
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