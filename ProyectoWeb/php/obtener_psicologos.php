<?php
header("Access-Control-Allow-Origin: *");
session_start();
include 'ConexionBD.php';
$usuario = $_SESSION['usuario'] ?? null;

$sql = "SELECT ID_psicologo, Nombre_psicologo, Telefono, Correo_psicologo, Descripcion_psicologo FROM psicologos";
$result = $conexion->query($sql);
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
        <a class="navbar-brand ps-3" href="../index.php"> SM Armonía y Equilibrio </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
 
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
 
                 
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if ($usuario): ?>
                        <li><span class="dropdown-item disabled">Hola, <?= htmlspecialchars($usuario['Correo']) ?></span></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/ProyectoWeb/php/PHP_CerrarSesion.php">Cerrar sesión</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="../login.html">Iniciar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="obtener_psicologos.php">
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
                                <a class="nav-link" href="../BienestarEmocional.php">Bienestar Emocional</a>
                            </nav>
 
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../ManejoEstres.php">Manejo del Estrés</a>
                            </nav>
 
 
                        </div>
                        <a class="nav-link" href="VerHistorias.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Historias Motivadoras!
                        </a>
 
 
                        <a class="nav-link" href="Php_libroVer.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Libros!
                        </a>
                        <a class="nav-link" href="../Fundadores.php">
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

        <!-- En este main se muestra los psicologos -->
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Psicólogos</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
                    <li class="breadcrumb-item active">Psicólogos</li>
                </ol>
<!-- =================================================NECESITO MODIFICAR ESTOS HREF ==================================================================================================================== -->
                <?php if ($usuario && $usuario['ID_rol'] == 1): ?>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="agregar_psicologo.php" class="btn btn-primary me-2">Agregar</a>
                        <a href="eliminar_psicologo.php" class="btn btn-danger">Eliminar</a>
                    </div>
                <?php endif; ?>
            </div>

                <?php
                include 'ConexionBD.php';

                $sql = "SELECT ID_psicologo, Nombre_psicologo, Telefono, Correo_psicologo, Descripcion_psicologo FROM psicologos";
                $result = $conexion->query($sql);

                if ($result && $result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):

                        $nombre = htmlspecialchars($row['Nombre_psicologo']);
                        $telefono = htmlspecialchars($row['Telefono']);
                        $correo = htmlspecialchars($row['Correo_psicologo']);
                        $descripcion = htmlspecialchars($row['Descripcion_psicologo']);
                ?>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user me-1"></i> <?= $nombre ?>
                    </div>
                    <div class="card-body">
                        <p><strong>Teléfono:</strong> <a href="tel:<?= $telefono ?>"><?= $telefono ?></a></p>
                        <p><strong>Correo:</strong> <a href="mailto:<?= $correo ?>"><?= $correo ?></a></p>
                        <p><strong>Descripción:</strong> <?= $descripcion ?></p>
                        <p>
                            <strong>Calificación:</strong>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-alt"></span>
                            <span class="fa fa-star"></span>
                        </p>
                    </div>
                </div>

                <?php
                    endwhile;
                else:
                ?>
                    <div class="alert alert-info">No se encontraron psicólogos registrados.</div>
                <?php endif;

                $conexion->close();
                ?>


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