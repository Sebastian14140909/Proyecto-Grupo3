<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
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
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php"> SM Armonía y Equilibrio </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" id="formBusqueda">
        </form>
        <!-- Navbar-->
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Fundadores</h1>
                    
                   <!-- Sección de Fundadores -->
<section id="fundadores" class="fundadores">
    <!-- Imagen centrada -->
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="Imagenes/Logo.jpg" alt="Imagen de SM Armonía y Equilibrio" width="250" height="250">
    </div>
    
    <div class="contenedor-fundadores">
        <h2>Conoce a los Fundadores de SM Armonía y Equilibrio</h2>
        <p>SM Armonía y Equilibrio fue fundada por un grupo de visionarios apasionados por el bienestar emocional y psicológico de las personas. Nuestra misión es ofrecer herramientas, conocimientos y servicios para mejorar la calidad de vida y el equilibrio mental de nuestros usuarios.</p>
        
        <div class="fundador">
            <h3>Sebastián Rodríguez Arce</h3>
            <p>Fundador y Director General. Con una amplia experiencia en psicología y gestión de equipos, Sebastián se dedica a la innovación en el ámbito de la salud mental y el bienestar emocional.</p>
        </div>

        <hr class="separador" />

        
        <div class="fundador">
            <h3>Manrique Torres Castillo</h3>
            <p> Fundador y Director de Tecnología. Sebastián lidera la creación de plataformas digitales que permiten a las personas acceder a recursos y profesionales de la salud emocional de manera eficiente y accesible.</p>
        </div>

        <hr class="separador" />

        <div class="fundador">
            <h3>Sebastián Solís</h3>
            <p>Fundador y Director de Investigación. Manrique tiene un enfoque en la investigación sobre el manejo del estrés y la mejora de las capacidades emocionales, con el objetivo de desarrollar soluciones basadas en evidencia.</p>
        </div>

        <hr class="separador" />

        <div class="fundador">
            <h3>Deivit Fernández</h3>
            <p>Fundador y Director de Marketing. Deivit se encarga de posicionar la marca de SM Armonía y Equilibrio en el mercado, buscando conectar con las personas a través de campañas estratégicas.</p>
        </div>
    </div>
</section>

<!-- Separador entre Fundadores y Contacto -->
<hr class="separador" />

<!-- Sección de Contacto Mejorada -->
<section id="contacto" class="contacto">
    <div class="contenedor-contacto">
        <h2>Contáctanos</h2>
        <p>¿Tienes alguna pregunta o necesitas ayuda? No dudes en comunicarte con nosotros. Estamos aquí para ayudarte.</p>
        
        <div class="info-contacto">
            <div class="item-contacto">
                <h3>Teléfonos</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> +506 8723-8444</li>
                    <li><i class="fas fa-phone"></i> +506 8808-6741</li>
                </ul>
            </div>
            <div class="item-contacto">
                <h3>Correos Electrónicos</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:contacto@smarmonia.com">contacto@smarmonia.com</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:soporte@smarmonia.com">soporte@smarmonia.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
