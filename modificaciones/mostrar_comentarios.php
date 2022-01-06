<?php
    require_once "../conexionBD/conexion.php";
    $codigo_producto = $_POST["id_producto"];
    if(isset($_POST["id_producto"]) && isset($_POST["id_comentario"]) && isset($_POST["id_usuario"])){
        $id_producto = $_POST["id_producto"];
        $id_comentario = $_POST["id_comentario"];
        $id_usuario = $_POST["id_usuario"];
        $consulta_delete_comentario = "DELETE FROM opinion WHERE fecha_registro = '$id_comentario' AND productos_id_producto = '$id_producto' AND usuarios_id_usuario = '$id_usuario'";
        $respuesta_delete_comentario = $conn->query($consulta_delete_comentario);
        if($respuesta_delete_comentario){
            echo "El comentario a sido eliminado correctamente";
        }else{
            echo "Lo sentimos, pero el comentario no a sido eliminado.";
        }
    }
    if(isset($_POST["peticion"])){
        $consulta_comentarios_usuarios = "SELECT op.fecha_registro,op.comentario,op.producto_puntaje,u.id_usuario,u.nombre,u.apellido_paterno FROM opinion op INNER JOIN usuarios u ON op.usuarios_id_usuario = u.id_usuario WHERE op.productos_id_producto = '$codigo_producto'";
        $comentarios_usuarios = $conn->query($consulta_comentarios_usuarios);
        $cantidad_comentarios = mysqli_num_rows($comentarios_usuarios);
        if($cantidad_comentarios>0){
            $array_comentarios;
            while ($comentario = $comentarios_usuarios->fetch_assoc()) {
                $array_comentarios[] = $comentario;
            }
            echo json_encode($array_comentarios);
        }else{
            $array_comentarios = [
                "respuesta" => "No se encontraron productos"
            ];
            echo json_encode($array_comentarios);
        }
    }
?>
