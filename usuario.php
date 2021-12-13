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
</head>
<body>
    <main>
        <section class="main-container">
            <aside>
                <a href="Panel.html" class="home-link"><img class="logo" src="./Certisaas _ Dashboard_files/logo.svg" alt=""></a>
                <div class="nav_links">
                <div class="link">
                        <a href="index.php">
                            <img src="icons/capa.png"></img>
                            <span>Tablas de Base datos</span>
                        </a>
                    </div>
                    <div class="link" class="link">
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
                    <div class="link active">
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
                <div class="nav_links" style="margin-top: auto;">
                    <div class="link">
                        <a href="./../Tienda_online_rios/index.php">
                            <img src="icons/salida.png">
                            <span>Cerrar sesión</span>
                        </a>
                    </div>
                </div>
            </aside>
            <div class="page-content">
                <div class="header">
                    <div class="role">
                        <button class="menu-btn"></button>
                        <a href="https://intuitionagencia.com/certisaas/dashboard.html?fbclid=IwAR2QrGtPtHRvqArbAJP88-VrOTHjp5VPf7ntAvw3Z3Ye07AhLirNqzQAGGw#" class="home-link d-flex d-lg-none mt-0"><img class="logo" src="./Certisaas _ Dashboard_files/logo.svg" alt=""></a>
                        <div class="cs-field select d-none d-lg-flex"><!-- ikdgkd-->
                            <div class="select-contianer">
                                <select name="" id=""   >
                                    <option value="">Administrador</option>
                                    <option value="">Usuarios</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="global-stats">
                        <div class="stat-item">
                            <img src="./Certisaas _ Dashboard_files/logos/producto.png" alt="">
                            <div>
                                <h5>Productos vendidos</h5>
                                <span>140 - Hoy</span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <img src="./Certisaas _ Dashboard_files/logos/usuario.png" alt="">
                            <div>
                                <h5>Usuarios registrados</h5>
                                <span>12 - Hoy</span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <img src="./Certisaas _ Dashboard_files/logos/transparencia.png" alt="">
                            <div>
                                <h5>Visitas de la Pagina</h5>
                                <span>30 - Hoy</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-actions">
                        <button class="link">
                            <a href="" style="margin-inline-end: 1em;">
                                <img src="icons/archivo.png" class="icons_user"></img>
                            </a>
                        </button>
                        <button class="link">
                            <a href="" style="margin-inline-end: 0.3em;">
                                <img src="icons/bandeja-de-entrada.png" class="icons_user"></img>
                                <span>2</span>
                            </a>
                        </button>
                        <div class="profile-option img-fit">
                            <img src="./Certisaas _ Dashboard_files/photo-1563306406-e66174fa3787" alt="">
                        </div>
                        <div class="menu">
                            <a href="" class="link">
                                Mi perfil
                                <button class="link">
                                    <img src="icons/usuario.png" style="width:1.9em"></img>
                                </button>
                            </a>
                            <a href="" class="link">
                                Salir
                                <button class="link">
                                    <img src="icons/salida.png" style="width:1.9em"></img>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="">
                        <h4 class="page-title">Tabla de Usuarios</h4>
                        <div class="content-header">
                            <div class="table-masive-actions">
                                <form action="https://intuitionagencia.com/certisaas/dashboard.html?fbclid=IwAR2QrGtPtHRvqArbAJP88-VrOTHjp5VPf7ntAvw3Z3Ye07AhLirNqzQAGGw" class="search-data-form">
                                    <button class="search-btn" class="link">
                                        <img src="icons/buscar.png" style="width:1em"></img>
                                    </button>
                                    <input type="search" placeholder="Buscar">
                                </form>
                                <button class="icon-btn">
                                    <img src="icons/editar.png" style="width:1em"></img>
                                </button>
                                <button class="icon-btn">
                                    <img src="icons/basura.png" style="width:1em"></img>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM `usuarios`";
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
                                    <th style="min-width:106px">ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DNI</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tipo_usuario;
                                while ($row = $result->fetch_assoc()) {
                                    if($row["rango"] === "1"){
                                        $tipo_usuario = "Administrador";
                                    }else{
                                        $tipo_usuario = "Cliente";
                                    }
                                    echo '
                                    <tr>
                                        <td><div class="cs-field"><input type="checkbox"></div></td>
                                        <td>
                                            <div class="company-name">
                                                <div class="img-fit">
                                                    <img src="icons/usuario.png" alt="">
                                                </div>
                                                <p>'.$row['id_usuario'].'</p>
                                            </div>
                                        </td>
                                        <td>'.$row['nombre'].'</td>
                                        <td>'.$row['apellido_paterno'].'</td>
                                        <td>'.$row['dni'].'</td>
                                        <td>'.$row['celular'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['password'].'</td>
                                        <td>'.$tipo_usuario.'</td>
                                    </tr> 
                                    ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="./Certisaas _ Dashboard_files/jquery-3.6.0.min.js.descarga"></script>
    <script src="./Certisaas _ Dashboard_files/custom.js.descarga"></script>
  </body></html>