<?php
    require_once "../conexionBD/conexion.php";
    $name_tabla = $_POST["name_tabla"];
    if($name_tabla === "productos"){
        $id_date = $_POST["id_date"];
        $consulta_delete_date = "DELETE FROM productos WHERE productos.id_producto = '${id_date}'";
        $respuesta_delete = $conn->query($consulta_delete_date);
        if($respuesta_delete){
            echo "<span style='color:#38b000;'>El producto a sido eliminado.</span>";
        }else{
            echo "<span style='color:red;'>Tenemos problemas para eliminar el producto.</span>";
        }
    }
    if($name_tabla === "ficha_tecnica"){
        $id_date = $_POST["id_date"];
        $consulta_delete_date = "DELETE FROM ficha_tecnica WHERE productos_id_producto = '${id_date}'";
        $respuesta_delete = $conn->query($consulta_delete_date);
        if($respuesta_delete){
            echo "<span style='color:#38b000;'>El producto a sido eliminado.</span>";
        }else{
            echo "<span style='color:red;'>Tenemos problemas para eliminar el producto.</span>";
        }
    }
?>