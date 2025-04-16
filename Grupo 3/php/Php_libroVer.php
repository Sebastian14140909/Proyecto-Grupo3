
<?php
header("Access-Control-Allow-Origin: *");
include 'ConexionBD.php';

$query = "SELECT * FROM libros";
$resultado = $conexion->query($query);
$libros = [];

if ($resultado) {
    while ($fila = $resultado->fetch_assoc()) {
        $libros[] = $fila;
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SM Armonía y Equilibrio</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="../index.html"> SM Armonía y Equilibrio </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>

                 
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                    <li><a class="dropdown-item" href="#!">iniciar sesion</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Cerrar sesion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="Psicologos.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Nuestros mejores psicologos!
                        </a>
                        <a class="nav-link collapsed" href="charts.html" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Blogs y Articulos!
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="BienestarEmocional.html">Bienestar Emocional</a>
                            </nav>

                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="ManejoEstres.html">Manejo del Estrés</a>
                            </nav>


                        </div>
                        <a class="nav-link" href="Historias.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Historias Motivadoras!
                        </a>


                        <a class="nav-link" href="Libros.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Libros!
                        </a>
                        <a class="nav-link" href="Fundadores.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Fundadores
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"></div>

                </div>
            </nav>
        </div>
        
        <div id="layoutSidenav_content">

        <!-- En este main se muestra los libros -->
            <main>
                <div class="container-fluid px-4">
                    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                        <h1 class="mb-0">Libros Recomendados</h1>
                        <div>
                            <a href="Agregar_Libros.php" class="btn btn-primary me-2">Agregar</a>
                            <a href="Eliminar_Libros.php" class="btn btn-danger">Eliminar</a>
                        </div>

                    </div>

                    <div class="book-container">
                        <?php foreach ($libros as $libro): ?>
                            <a href="<?= htmlspecialchars($libro['Link_venta']) ?>" target="_blank" class="book-link">
                                <div class="book-card">
                                    <img src="<?= htmlspecialchars($libro['Ruta_Imagen']) ?>" alt="Imagen del libro">
                                    <div class="book-title"><?= htmlspecialchars($libro['Titulo']) ?></div>
                                    <div class="book-description"><?= htmlspecialchars($libro['Detalle_Libro']) ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Proyecto Grupo 3 </div>
            </div>
        </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <!-- este es el que sirve para los dropdown -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>
