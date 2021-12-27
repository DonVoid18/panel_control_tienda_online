<?php
    require_once "php/head.php";
    $pagina = isset($_GET["p"]) ? strtolower($_GET["p"]) : "productos";
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
                <?php
                    // validación si página que se encuentra en el link existe
                    //referencia: https://cybmeta.com/comprobar-en-php-si-existe-un-archivo-o-una-url
                    $documento = "secciones/".$pagina.".php";
                    if(is_file($documento)){
                        require_once "secciones/".$pagina.".php";
                    }else{
                        echo "<div class='container_bloque_informacion'>Esta dirección no existe.</div>";
                    }
                ?>
            </div>
        </div>
    </div>
<?php
    require_once "php/footer.php";
?>