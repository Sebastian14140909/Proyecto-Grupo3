
<?php
session_start();
include 'ConexionBD.php';
$usuario = $_SESSION['usuario'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agregar_historia'])) {
    $id_usuario = $_POST['id_usuario'];
    $trabajo = $_POST['trabajo'];
    $historias = $_POST['historias'];

    $id_usuario = $conexion->real_escape_string($id_usuario);
    $trabajo = $conexion->real_escape_string($trabajo);
    $historias = $conexion->real_escape_string($historias);

    $sql = "INSERT INTO historias (ID_Usuario, Trabajo, Historias) 
            VALUES (?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conexion->error);
    }

    $stmt->bind_param("iss", $id_usuario, $trabajo, $historias);

    if ($stmt->execute()) {
        echo "Nueva historia agregada con éxito.";
    } else {
        echo "Error al agregar la historia: " . $stmt->error;
    }

    $stmt->close();
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

        <!-- En este main se muestra el form para agregar psicologos -->
        <main class="container mt-4 d-flex justify-content-center">
            <div class="w-100" style="max-width: 600px;">
                <h1 class="text-center mb-4">Agregar una Nueva Historia Motivadora</h1>

                <form action="agregar_historia.php" method="POST" class="card p-4 shadow rounded">
                    <div class="mb-3">
                        <label for="id_usuario" class="form-label">ID del Usuario</label>
                        <input type="number" class="form-control" id="id_usuario" name="id_usuario" required>
                    </div>

                    <div class="mb-3">
                        <label for="trabajo" class="form-label">Trabajo</label>
                        <input type="text" class="form-control" id="trabajo" name="trabajo" required>
                    </div>

                    <div class="mb-3">
                        <label for="historias" class="form-label">Historia</label>
                        <textarea class="form-control" id="historias" name="historias" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" name="agregar_historia">Agregar Historia</button>
                </form>

                <div class="mt-4 d-flex gap-2">
                    <a href="VerHistorias.php" class="btn btn-secondary">Ver Historias</a>
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