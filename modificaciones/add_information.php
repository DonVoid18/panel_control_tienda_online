<?php
    require_once "../conexionBD/conexion.php";
    $values = json_decode($_POST['array']);
    if($values[count($values)-1] === "productos"){
        $insertar_productos = "INSERT INTO productos (marca,descripcion,cantidad,categoria_id_categoria,precio,imagen_producto) VALUES ('$values[0]','$values[1]','$values[2]','$values[3]','$values[4]','$values[6]')";
        $resultado_insert_productos = $conn->query($insertar_productos);
        $last_id = $conn->insert_id;
        if($resultado_insert_productos){
            $insertar_oferta = "INSERT INTO oferta (productos_id_producto,descuento,estado_oferta) VALUES ('$last_id','$values[5]','1')";
            $resultado_insert_oferta = $conn->query($insertar_oferta);
            if($resultado_insert_oferta){
                echo "El producto se ha añadido correctamente";
            }else{
                echo "Hay problemas en los datos de la oferta del producto";
            }
        }else{
            echo "No se ha añadido el producto";
        }
    }
    $conn->close();
?>