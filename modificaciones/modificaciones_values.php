<?php
    require_once "../conexionBD/conexion.php";
    $name_tabla = $_POST["name_tabla"];
    if($name_tabla === "productos"){
        $id_producto = $_POST["id_value_date"];
        $id_categoria = $_POST["id_categoria"];
        $marca = $_POST["marca_producto"];
        $descripcion = $_POST["descripcion_producto"];
        $cantidad = $_POST["cantidad_producto"];
        $precio = $_POST["precio_producto"];
        $descuento = $_POST["descuento_producto"];
        $estado_oferta = $_POST["estado_oferta"];
        $url_imagen = $_POST["url_imagen"];
        $consulta_modificar_productos = "UPDATE productos INNER JOIN oferta ON productos.id_producto=oferta.productos_id_producto SET productos.marca='$marca',productos.descripcion='$descripcion',productos.cantidad='$cantidad',productos.precio='$precio' ,oferta.descuento='$descuento' ,productos.categoria_id_categoria='$id_categoria' ,oferta.estado_oferta='$estado_oferta', productos.imagen_producto='$url_imagen' WHERE productos.id_producto='$id_producto'";
        $respuesta_modificacion = $conn->query($consulta_modificar_productos);
        if($respuesta_modificacion){
            echo "<span style='color:#38b000;'>Modificado correctamente, recargue la página para ver los cambios.</span>";
        }else{
            echo "<span style='color:red;'>No se ha podido modificar</span>";
        }
    }
?>