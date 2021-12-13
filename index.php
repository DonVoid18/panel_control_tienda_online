<?php
include("Conexiones/conexion.php")
?>
<!DOCTYPE html>
<!-- saved from url=(0123)https://intuitionagencia.com/certisaas/dashboard.html?fbclid=IwAR2QrGtPtHRvqArbAJP88-VrOTHjp5VPf7ntAvw3Z3Ye07AhLirNqzQAGGw# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certisaas | Dashboard</title>
    <link rel="stylesheet" href="./Certisaas _ Dashboard_files/custom.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Certisaas _ Dashboard_files/css2" rel="stylesheet">
    <script src="js/control_poc.js"></script>
    <script>
        (function (global) {
            if(typeof (global) === "undefined") {
                throw new Error("window is undefined");
            }

            var _hash = "!";
            var noBackPlease = function () {
                global.location.href += "#";

                // making sure we have the fruit available for juice (^__^)
                global.setTimeout(function () {
                    global.location.href += "!";
                }, 50);
            };

            global.onhashchange = function () {
                if (global.location.hash !== _hash) {
                    global.location.hash = _hash;
                }
            };

            global.onload = function () {
                noBackPlease();

                // disables backspace on page except on input fields and textarea..
                document.body.onkeydown = function (e) {
                    var elm = e.target.nodeName.toLowerCase();
                    if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                        e.preventDefault();
                    }
                    // stopping event bubbling up the DOM tree..
                    e.stopPropagation();
                };
            }

        })(window);
    </script>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cerrar_sesion_panel_principal"])){
        session_start();
        session_destroy();
        header("Location: ./../Tienda_Online_Rios/index.php");
    }
    ?>
</head>
<body>
    <main>
        <section class="main-container">
            <aside>
                <a href="Panel.html" class="home-link"><img class="logo" src="./Certisaas _ Dashboard_files/logo.svg" alt=""></a>
                <div class="nav_links">
                    <div class="link active" class="link">
                        <a href="./index.php">
                            <img src="icons/capa.png"></img>
                            <span>Tablas de Base datos</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./productos.php">
                            <img src="icons/productos.png"></img>
                            <span>Productos</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./Categoria.php">
                            <img src="icons/control-s.png"></img>
                            <span>Categorias</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./usuario.php">
                            <img src="icons/usuario.png"></img>
                            <span>Usuarios</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./ingresos.php">
                            <img src="icons/carrito-de-compras.png"></img>
                            <span>Pedidos</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./comentario.php">
                            <img src="icons/mensaje.png"></img>
                            <span>Comentario</span>
                        </a>
                    </div>
                    <div class="link">
                        <a href="./inser_dat.php">
                            <img src="icons/lista.png"></img>
                            <span>Insertar datos</span>
                        </a>
                    </div>
                </div>
                <form class="nav_links" style="margin-top: auto;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="link">
                        <button name="cerrar_sesion_panel_principal" type="submit">
                            <img src="icons/salida.png">
                            <span>Cerrar sesión</span>
                        </button>
                            <!-- tenemos que recibir la variable en la misma página y destruir las variables de session -->
                    </div>
                </form>
            </aside>
            <div class="page-content">
                <div class="header">
                    <div class="global-stats">
                        <div class="stat-item">
                            <img src="./Certisaas _ Dashboard_files/logos/producto.png" alt="">
                            <div>
                                <h5>Productos de la tienda</h5>
                                <span>
                                <?php
                                    $consulta_productos_total = "SELECT COUNT(productos.id_producto) AS cantidad_productos FROM productos";
                                    $cantidad_productos = $conn->query($consulta_productos_total);
                                    $cantidad_productos_number = $cantidad_productos->fetch_assoc();
                                    echo $cantidad_productos_number["cantidad_productos"];
                                ?>
                                </span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <img src="./Certisaas _ Dashboard_files/logos/usuario.png" alt="">
                            <div>
                                <h5>Usuarios registrados</h5>
                                <span>
                                <?php
                                    $consulta_usuarios_total = "SELECT COUNT(usuarios.id_usuario) AS cantidad_usuarios FROM usuarios WHERE usuarios.rango='0'";
                                    $cantidad_usuarios = $conn->query($consulta_usuarios_total);
                                    $cantidad_usuarios_number = $cantidad_usuarios->fetch_assoc();
                                    echo $cantidad_usuarios_number["cantidad_usuarios"];
                                ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="header-actions">
                        <div class="profile-option img-fit">
                            <img src="./Certisaas _ Dashboard_files/logo_admin.png" alt="Imagen del administrador">
                        </div>
                        <div class="menu">
                            <a href="" class="link">
                                Mi perfil
                                <button class="link">
                                    <img src="icons/usuario.png" style="width:1.9em"></img>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="">
                        <h4 class="page-title">Tablas de la Tienda Patrick</h4>
                        <div class="content-header">
                            <div class="table-filter">
                                <div class="cs-field select">
                                    <label for="">Tipo de Dato</label>
                                    <div class="select-contianer">
                                        <select name="" id="">
                                            <option value="" selected>Seleccionar</option>
                                            <option value="">Nombre</option>
                                            <option value="">Mayor cantidad de filas</option>
                                            <option value="">Menor cantidad de filas</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="cs-btn btn-blue sm-btn">Filtrar</button>
                            </div>
                            <div class="table-masive-actions">
                                <form action="https://intuitionagencia.com/certisaas/dashboard.html?fbclid=IwAR2QrGtPtHRvqArbAJP88-VrOTHjp5VPf7ntAvw3Z3Ye07AhLirNqzQAGGw" class="search-data-form">
                                    <button class="search-btn" class="link">
                                        <img src="icons/buscar.png" style="width:1em"></img>
                                    </button>
                                    <input type="search" placeholder="Buscar">
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    $query = "SHOW TABLES FROM tienda_online_patrick_test;";
                    $result = $conn->query($query);
                    // $tables = $conn->query($query);
                    // $row = $tables->fetch_assoc();
                    // $cant_filas = mysqli_num_rows($tables)
                    ?>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th><div class="cs-field"><input type="checkbox" onclick="marcar(this)"></div></th>
                                    <th>Nombre</th>
                                    <th>Numero de filas</th>
                                    <th class="sm-col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <td><div class="cs-field"><input type="checkbox"></div></td>
                                        <td>
                                            <div class="company-name">
                                                <div class="img-fit">
                                                    <img src="icons/marcador (1).png" alt="">
                                                </div>
                                                <p>'?>
                                                <?php
                                                $query = "SELECT COUNT(*) AS TOTAL_ROWS FROM ".$row['Tables_in_tienda_online_patrick_test'].";";
                                                $cant_filas=$conn->query($query);
                                                $row_=$cant_filas->fetch_assoc();
                                                echo $row['Tables_in_tienda_online_patrick_test'];
                                                echo '</p>
                                            </div>
                                        </td>
                                        <td>';echo $row_['TOTAL_ROWS'].'</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="icon-btn">
                                                    <img src="icons/editar.png" style="width:1em"></img>
                                                </button>
                                                <button class="icon-btn">
                                                    <img src="icons/basura.png" style="width:1em"></img>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> 
                                    ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="center-vertical justify-content-between">
                        <p class="mb-0">250 elementos</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="./Certisaas _ Dashboard_files/jquery-3.6.0.min.js.descarga"></script>
    <script src="./Certisaas _ Dashboard_files/custom.js.descarga"></script>
  </body></html>
  