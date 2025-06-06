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
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
                        <a class="nav-link" href="Fundadores.html">
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
                    <h1 class="mt-4">Bienestar emocional</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active">Bienestar Emocional</li>
                    </ol>

                    <!-- Sección de información sobre el Bienestar Emocional -->
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h2>¿Qué es el bienestar emocional?</h2>
                            <p>
                                El bienestar emocional es un estado de equilibrio interno que nos permite afrontar los
                                desafíos de la vida con una actitud positiva y resiliente. No significa estar
                                constantemente
                                felices o libres de preocupaciones, sino tener la capacidad de gestionar nuestras
                                emociones
                                de manera saludable. Es un aspecto fundamental de nuestra salud mental, ya que influye
                                en la
                                forma en que interactuamos con los demás, tomamos decisiones y enfrentamos situaciones
                                difíciles.

                            </p>
                            <p>
                                Una persona con un buen bienestar emocional puede reconocer sus emociones, expresarlas
                                de
                                manera adecuada y regular sus respuestas ante los estímulos del entorno. Además, el
                                bienestar emocional está vinculado a la autoestima y la confianza en uno mismo, factores
                                esenciales para desarrollar una vida plena y satisfactoria. Trabajar en nuestro
                                bienestar
                                emocional nos permite sentirnos más en control de nuestras vidas, fortalecer nuestras
                                relaciones interpersonales y encontrar mayor satisfacción en nuestras actividades
                                diarias.

                            </p>
                            <hr>
                            <!-- Imagen del estrés -->
                            <img src="Imagenes/Bienestar emocional 1.jpeg" alt="Estrés" class="img-fluid mb-4"
                                style="max-width: 25%; border-radius: 8px;">


                            <hr>

                            <h3>Problemas comunes que afectan el bienestar emocional</h3>
                            <p>
                                Existen diversos factores que pueden impactar negativamente nuestro bienestar emocional.
                                El
                                estrés crónico, la ansiedad, la depresión y la baja autoestima son algunos de los
                                problemas
                                más frecuentes. Estos estados emocionales pueden ser el resultado de múltiples factores,
                                como la presión laboral, conflictos familiares, dificultades económicas o la falta de
                                apoyo
                                social. Además, situaciones traumáticas o experiencias negativas del pasado pueden dejar
                                una
                                huella profunda en nuestra estabilidad emocional.

                            </p>


                            <p>Cuando nuestro bienestar emocional se ve afectado, podemos experimentar síntomas como
                                fatiga
                                constante, dificultad para dormir, cambios en el apetito, irritabilidad y problemas de
                                concentración. También es común que las personas con un bajo bienestar emocional se
                                sientan
                                desmotivadas, aisladas o tengan dificultades para disfrutar de las cosas que solían
                                hacer
                                felices. Identificar estos signos es el primer paso para buscar soluciones y mejorar
                                nuestra
                                calidad de vida.</p>

                            <hr>

                            <h3>Soluciones y estrategias para mejorar el bienestar emocional</h3>

                            <p>Para fortalecer nuestro bienestar emocional, es importante adoptar una serie de hábitos
                                saludables que nos ayuden a gestionar nuestras emociones y reducir el impacto de los
                                factores estresantes en nuestra vida. Algunas estrategias efectivas incluyen:</p>

                            <ul>
                                <li><strong>Autoconocimiento y reflexión:</strong> Dedicar tiempo a conocernos mejor,
                                    identificar nuestras emociones y entender qué situaciones nos afectan positiva o
                                    negativamente nos permitirá tomar decisiones más alineadas con nuestro bienestar.
                                </li>
                                <li><strong>Gestión del estrés:</strong> Aprender a manejar el estrés es clave para
                                    mantener
                                    el equilibrio emocional. Técnicas como la meditación, la respiración profunda y el
                                    ejercicio regular pueden ayudarnos a reducir los niveles de estrés y ansiedad.</li>
                                <li><strong>Fomentar relaciones saludables:</strong> Rodearnos de personas que nos
                                    brinden
                                    apoyo y comprensión es esencial para nuestro bienestar. Las relaciones positivas nos
                                    ayudan a sentirnos valorados y fortalecen nuestra autoestima.</li>
                                <li><strong>Hábitos saludables:</strong> Una alimentación equilibrada, una rutina de
                                    sueño
                                    adecuada y la práctica de actividades recreativas contribuyen significativamente a
                                    nuestra salud mental y emocional.</li>
                                <li><strong>Expresión emocional:</strong> Encontrar formas saludables de expresar
                                    nuestras
                                    emociones, ya sea a través del arte, la escritura o el diálogo con personas de
                                    confianza, nos ayuda a procesar nuestras experiencias de manera positiva.</li>
                                <li><strong>Buscar ayuda profesional:</strong> En ocasiones, es necesario acudir a un
                                    terapeuta o profesional de la salud mental para recibir orientación y apoyo. No
                                    debemos
                                    temer pedir ayuda cuando sentimos que nuestras emociones nos sobrepasan.</li>
                            </ul>

                            <p>Mejorar nuestro bienestar emocional es un proceso continuo que requiere esfuerzo y
                                dedicación. Al implementar estas estrategias en nuestra vida diaria, podemos aprender a
                                gestionar mejor nuestras emociones, reducir el impacto del estrés y vivir de manera más
                                plena y equilibrada.</p>
                        </div>
                        <!-- Sección de video -->
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <h2 class="card-title">Mejorando el Bienestar Emocional</h2>
                                <p class="card-text text-center">Descubre consejos prácticos para mejorar tu bienestar emocional y
                                    llevar una vida más equilibrada.</p>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CYqnVV6CRa8"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
<script src="js/blogs.js"></script>
</body>

</html>