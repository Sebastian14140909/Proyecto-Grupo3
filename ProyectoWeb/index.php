<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="SM Armonía y Equilibrio - Bienestar Emocional a tu Alcance" />
    <meta name="author" content="SM Armonía y Equilibrio" />
    <title>SM Armonía y Equilibrio</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php"> SM Armonía y Equilibrio </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" id="formBusqueda">
        </form>

        <!-- Dropdown del usuario -->
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
                        <li><a class="dropdown-item" href="login.html">Iniciar sesión</a></li>
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
                        <a class="nav-link" href="/ProyectoWeb/php/obtener_psicologos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Nuestros mejores psicólogos!
                        </a>
                        <a class="nav-link collapsed" href="charts.html" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Blogs y Artículos!
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="BienestarEmocional.php">Bienestar Emocional</a>
                            </nav>

                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="ManejoEstres.php">Manejo del Estrés</a>
                            </nav>
                        </div>

                        <a class="nav-link" href="/ProyectoWeb/php/VerHistorias.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Historias Motivadoras!
                        </a>

                        <a class="nav-link" href="/ProyectoWeb/php/Php_libroVer.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Libros!
                        </a>
                        <a class="nav-link" href="Fundadores.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Fundadores
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <!-- Carrusel de imágenes -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Imagenes/imagindex1.jpg" class="d-block w-100" alt="Imagen 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Bienestar Emocional</h5>
                                <p>Promovemos el equilibrio y la paz interior.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Imagenes/imagindex2.jpg" class="d-block w-100" alt="Imagen 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Manejo del Estrés</h5>
                                <p>Herramientas y consejos prácticos para reducir el estrés.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Imagenes/indimg.webp" class="d-block w-100" alt="Imagen 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Historias Inspiradoras</h5>
                                <p>Lecturas motivadoras para tu bienestar emocional.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Aquí puedes agregar más contenido debajo del carrusel -->
                <section>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2>Bienvenido a SM Armonía y Equilibrio</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                En SM Armonía y Equilibrio, sabemos que el bienestar emocional es clave para una vida plena y equilibrada. Por eso, hemos creado este espacio con el objetivo de acompañarte en tu camino hacia el equilibrio y la salud mental.
                            </p>
                            <p>
                                Aquí encontrarás el apoyo que necesitas a través de contenidos diseñados especialmente para ti. Contamos con un equipo de psicólogos altamente capacitados, dispuestos a brindarte orientación personalizada. Además, ofrecemos blogs y artículos con herramientas y consejos prácticos para gestionar tus emociones y pensamientos.
                            </p>
                            <p>
                                También compartimos historias motivadoras de personas que han superado grandes desafíos, inspirándote a seguir adelante. En nuestra sección de <em>Libros recomendados</em>, podrás descubrir lecturas que enriquecerán tu desarrollo personal.
                            </p>
                            <p>
                                Conoce a los <strong>fundadores de SM Armonía y Equilibrio</strong>, quienes están profundamente comprometidos con tu bienestar. 
                            </p>
                            <p>
                                Te invitamos a explorar nuestro sitio y descubrir los recursos que mejor se adapten a tus necesidades. En <strong>SM Armonía y Equilibrio</strong>, tu bienestar es nuestra misión.
                            </p>
                        </div>
                    </div>
                </section>
                                              
                
            </main>
        </div>
    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Proyecto Grupo 3 </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/scripts.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/datatables-simple-demo.js"></script> -->
</body>

</html>
