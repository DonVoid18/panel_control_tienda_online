<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,400&family=Open+Sans:wght@500&family=Roboto:wght@300&family=Rubik:ital,wght@0,400;1,300&family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.co m/css2?family=Lato:ital,wght@0,300;0,400;1,400&family=Open+Sans:wght@500&family=Roboto:wght@300&family=Rubik:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <?php
        $ruta_carpeta_raiz = "/PANEL_CONTROL_TIENDA_ONLINE";//cambiar cada vez que el nombre de la carpeta raiz cambie
        $link_base_root = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$ruta_carpeta_raiz;
        $base_link = realpath($_SERVER["DOCUMENT_ROOT"]).$ruta_carpeta_raiz;
        require_once $base_link."/conexionBD/conexion.php";
    ?>
    <link rel="stylesheet" href="<?php echo $link_base_root?>/estilos/estilo_productos.css">
    <link rel="stylesheet" href="<?php echo $link_base_root?>/estilos/estilos.css">