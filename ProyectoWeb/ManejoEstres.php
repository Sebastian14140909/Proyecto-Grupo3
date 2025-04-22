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
                    <h1 class="mt-4">El manejo del estrés</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Manejo del Estrés</li>
                    </ol>

                    <!-- Sección de información sobre cómo manejar el estrés -->
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h2>¿Qué es el Estrés?</h2>
                            <p>
                                El estrés es una respuesta natural de nuestro cuerpo ante situaciones que percibimos
                                como desafiantes, abrumadoras o amenazantes. Esta respuesta, conocida como "lucha o
                                huida", activa nuestro sistema nervioso para ayudarnos a enfrentar o escapar de
                                peligros. Sin embargo, cuando el estrés se experimenta de forma constante y no se
                                gestiona adecuadamente, puede tener efectos perjudiciales en nuestra salud física y
                                mental.
                            </p>
                            <p>
                                Aunque en pequeñas dosis el estrés puede ser útil, ayudándonos a mantenernos enfocados y
                                productivos, cuando se prolonga en el tiempo puede contribuir a la aparición de
                                ansiedad, insomnio, problemas digestivos y otros trastornos. Es importante aprender a
                                manejarlo de manera efectiva para mantener un equilibrio emocional y bienestar general.
                            </p>
                            <!-- Imagen del estrés -->
                            <img src="Imagenes/ImagEstres.jpg" alt="Estrés" class="img-fluid mb-4"
                                style="max-width: 100%; border-radius: 8px;">


                            <hr>

                            <h3>Consejos para Manejar el Estrés</h3>
                            <p>
                                Aquí te presentamos algunas estrategias que pueden ayudarte a reducir el estrés en tu
                                vida diaria y promover una mejor salud mental:
                            </p>

                            <ul>
                                <li><strong>1. Practica la Meditación:</strong> La meditación es una herramienta
                                    poderosa que ayuda a calmar la mente y reducir los niveles de estrés. Dedica entre
                                    10 a 15 minutos al día para realizar ejercicios de respiración profunda o
                                    mindfulness, lo que te permitirá liberar tensiones y recuperar tu equilibrio
                                    interior.</li>
                                <li><strong>2. Realiza Ejercicio Regular:</strong> El ejercicio no solo mejora tu salud
                                    física, sino que también es un potente antídoto contra el estrés. La actividad
                                    física, como caminar, correr, hacer yoga o nadar, libera endorfinas, las cuales son
                                    neurotransmisores que mejoran el estado de ánimo y reducen la ansiedad.</li>
                                <li><strong>3. Técnicas de Respiración:</strong> La respiración profunda y controlada es
                                    una de las formas más efectivas de reducir el estrés en el momento. Prueba la
                                    técnica de respiración 4-7-8: inhala durante 4 segundos, mantén la respiración por 7
                                    segundos y exhala lentamente durante 8 segundos. Esta práctica ayuda a relajar el
                                    cuerpo y la mente.</li>
                                <li><strong>4. Establece Prioridades:</strong> A menudo nos sentimos estresados porque
                                    tenemos demasiadas cosas en nuestra lista de tareas. Organiza tus actividades y
                                    establece prioridades para concentrarte en lo que realmente importa. Eliminar lo que
                                    no es urgente o importante puede ayudarte a reducir la sensación de sobrecarga.</li>
                                <li><strong>5. Busca Apoyo Social:</strong> Hablar con amigos, familiares o colegas
                                    sobre lo que te está causando estrés es una forma eficaz de aligerar la carga
                                    emocional. A veces, simplemente expresar lo que sientes puede proporcionarte una
                                    gran liberación y perspectiva.</li>
                                <li><strong>6. Practica el Autocuidado:</strong> Asegúrate de reservar tiempo para ti
                                    mismo cada día. Ya sea leyendo un libro, tomando un baño relajante o disfrutando de
                                    una caminata al aire libre, el autocuidado es esencial para reducir el estrés y
                                    cuidar tu bienestar general.</li>
                            </ul>

                            <hr>

                            <h3>Cómo Reducir el Estrés en 5 Minutos</h3>
                            <!-- Video embed de YouTube -->
                            <div class="video-container mb-4">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/VZrUfADraX8?si=gA3CtnbbXnTtMV5u" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>

                            <hr>

                            <h3>¿Por qué es Importante Controlar el Estrés?</h3>
                            <p>
                                El estrés prolongado no solo afecta nuestra salud mental, sino también nuestra salud
                                física. Se ha demostrado que el estrés crónico está relacionado con enfermedades como la
                                hipertensión, problemas cardíacos, trastornos digestivos y alteraciones en el sueño.
                                Además, puede afectar nuestra capacidad para tomar decisiones y manejar relaciones
                                interpersonales, lo que contribuye a un círculo vicioso de angustia y malestar.
                            </p>
                            <p>
                                Al aprender a manejar el estrés, podemos mejorar nuestra calidad de vida, aumentar
                                nuestra resiliencia emocional y enfrentar los desafíos de la vida con una actitud más
                                positiva y equilibrada. El manejo adecuado del estrés también mejora nuestra
                                productividad y creatividad, ya que nos permite pensar con claridad y actuar de manera
                                más efectiva.
                            </p>

                            <!-- Imagen de personas practicando mindfulness -->
                            <img src="Imagenes/ControlEstres.jpg" alt="Mindfulness" class="img-fluid mb-4"
                                style="max-width: 100%; border-radius: 8px;">

                            <hr>

                            <p>
                                Recuerda, el manejo del estrés no es algo que se logre de la noche a la mañana, pero con
                                práctica y las herramientas adecuadas, puedes reducir su impacto en tu vida diaria.
                                Empieza poco a poco, integrando una o dos de estas estrategias y observa cómo te
                                sientes. Tu bienestar es una prioridad, ¡y el primer paso hacia una vida más equilibrada
                                comienza hoy!
                            </p>
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
</body>

</html>