-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2025 a las 18:04:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectowebcs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs_articulos`
--

CREATE TABLE `blogs_articulos` (
  `ID_Blog` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `ID_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blogs_articulos`
--

INSERT INTO `blogs_articulos` (`ID_Blog`, `Titulo`, `Descripcion`, `Link`, `ID_usuario`) VALUES
(1, '¿Qué es el bienestar emocional?', 'El bienestar emocional es un estado de equilibrio interno que nos permite afrontar los desafíos de la vida con una actitud positiva y resiliente. No significa estar constantemente felices o libres de preocupaciones, sino tener la capacidad de gestionar nuestras emociones de manera saludable. Es un aspecto fundamental de nuestra salud mental, ya que influye en la forma en que interactuamos con los demás, tomamos decisiones y enfrentamos situaciones difíciles.  Una persona con un buen bienestar emocional puede reconocer sus emociones, expresarlas de manera adecuada y regular sus respuestas ante los estímulos del entorno. Además, el bienestar emocional está vinculado a la autoestima y la confianza en uno mismo, factores esenciales para desarrollar una vida plena y satisfactoria. Trabajar en nuestro bienestar emocional nos permite sentirnos más en control de nuestras vidas, fortalecer nuestras relaciones interpersonales y encontrar mayor satisfacción en nuestras actividades diarias.', 'https://elperuano.pe/fotografia/thumbnail/2024/10/10/000314116M.jpg', 1),
(2, 'Problemas comunes que afectan el bienestar emocional', ' Existen diversos factores que pueden impactar negativamente nuestro bienestar emocional. El estrés crónico, la ansiedad, la depresión y la baja autoestima son algunos de los problemas más frecuentes. Estos estados emocionales pueden ser el resultado de múltiples factores, como la presión laboral, conflictos familiares, dificultades económicas o la falta de apoyo social. Además, situaciones traumáticas o experiencias negativas del pasado pueden dejar una huella profunda en nuestra estabilidad emocional.', 'https://psicologousera.com/wp-content/uploads/2024/02/Problemas-psicologicos-emocionales-compressed.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `ID_Calificacion` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `Calificacion` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`ID_Calificacion`, `ID_Usuario`, `Calificacion`, `Descripcion`) VALUES
(1, 2, 5, 'Excelente atención y profesionalismo.'),
(2, 2, 4, 'Muy buena experiencia, volvería a consultar.'),
(3, 2, 3, 'No fue lo que esperaba pero cumple.'),
(4, 2, 2, 'Tiene mucho por mejorar'),
(5, 2, 1, 'No estoy nada contento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE `diario` (
  `Id_diario` int(11) NOT NULL,
  `ID_usuario` int(11) DEFAULT NULL,
  `Titulo_Diario` varchar(255) DEFAULT NULL,
  `Detalle_Diario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diario`
--

INSERT INTO `diario` (`Id_diario`, `ID_usuario`, `Titulo_Diario`, `Detalle_Diario`) VALUES
(1, 1, 'Primer día usando la app', 'Hoy comencé mi proceso de autoconocimiento.'),
(2, 1, 'Reflexión sobre la ansiedad', 'Me sentí mejor después de leer un artículo sobre respiración consciente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `Id_favoritos` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_Blog` int(11) DEFAULT NULL,
  `ID_Libro` int(11) DEFAULT NULL,
  `ID_calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`Id_favoritos`, `ID_Usuario`, `ID_Blog`, `ID_Libro`, `ID_calificacion`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias`
--

CREATE TABLE `historias` (
  `ID_Publicacion` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `Trabajo` varchar(255) DEFAULT NULL,
  `Historias` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historias`
--

INSERT INTO `historias` (`ID_Publicacion`, `ID_Usuario`, `Trabajo`, `Historias`) VALUES
(1, 1, 'Profesora escuela', 'Silvia Oviedo era una profesora de escuela en un pequeño pueblo rodeado de montañas. cada mañana, se levantaba temprano para preparar sus clases, asegurándose de que cada niño pudiera soñar en grande. Su escuela tenía pocos recursos, pero silvia usaba su creatividad para transformar materiales reciclados en herramientas educativas. cuando uno de sus estudiantes, andrés, dejó de asistir a clases, silvia visitó su casa y movilizó a la comunidad para ayudar a su familia. Gracias a su apoyo, andrés regresó a la escuela con nuevas ganas de aprender. años después, muchos de sus alumnos recordaban a silvia como la persona que creyó en ellos, y la escuela fue renombrada en su honor. Porque a veces, los héroes no usan capas, sino pizarras y tizas, cambiando vidas un estudiante a la vez.'),
(2, 2, 'Doctor', 'Lucas Mendoza era un enfermero que trabajaba en el hospital san josé. cada día, recorría los pasillos con una sonrisa, brindando palabras de aliento a cada paciente que atendía.  Un día, conoció a mariana, una niña que enfrentaba una larga recuperación. lucas, con su amabilidad, le contaba historias y le enseñaba juegos para que los días fueran más llevaderos. poco a poco, mariana empezó a mejorar, impulsada por la esperanza que lucas le transmitía.  Cuando mariana fue dada de alta, le regaló a lucas un dibujo de ellos dos con la palabra \"gracias\". lucas lo guardó en su casillero, recordándole que, con pequeños gestos de amor, podía hacer una gran diferencia en la vida de los demás.'),
(3, 2, 'Taller de arte comunitario', 'valeria rojas siempre soñó con ser artista, pero las dificultades económicas la obligaron a postergar su sueño. trabajaba en varios empleos para ayudar a su familia, pero nunca dejó de dibujar en sus ratos libres.  Un día, decidió abrir un pequeño taller de arte en su barrio, utilizando materiales reciclados. al principio, pocos creían en su proyecto, pero con perseverancia y amor por el arte, cada vez más niños y jóvenes se unieron a sus clases. Con el tiempo, su taller se convirtió en un espacio de inspiración y crecimiento personal. muchos de sus alumnos encontraron en el arte una forma de expresar sus emociones y superar momentos difíciles. Valeria, al ver cómo su pasión cambiaba vidas, entendió que nunca fue tarde para perseguir sus sueños y que, a veces, la verdadera obra maestra es ayudar a otros a descubrir su propio brillo interior.'),
(4, 2, 'Panaderia', 'Mateo López creció entre el aroma a pan recién horneado. cuando su padre enfermó, con solo 16 años, tomó las riendas de la panadería familiar para mantener a su madre y a sus hermanos menores. Las ventas eran escasas, pero mateo no se rindió. aprendió nuevas recetas en videos y empezó a hacer pasteles personalizados. a veces, los regalaba a familias que no podían pagar. Un día, una mujer le agradeció entre lágrimas: su pastel había sido lo único que hizo sonreír a su hijo, que luchaba contra el cáncer. ese momento marcó a mateo, quien siguió adelante. su panadería se convirtió en un símbolo de esperanza, recordándole que cada pequeño gesto podía cambiar una vida.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID_Libro` int(11) NOT NULL,
  `ID_usuario` int(11) DEFAULT NULL,
  `Detalle_Libro` text DEFAULT NULL,
  `Ruta_Imagen` varchar(255) DEFAULT NULL,
  `Link_venta` varchar(255) DEFAULT NULL,
  `Titulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID_Libro`, `ID_usuario`, `Detalle_Libro`, `Ruta_Imagen`, `Link_venta`, `Titulo`) VALUES
(1, 1, 'Explora cómo aceptar la vulnerabilidad y vivir con autenticidad', 'https://m.media-amazon.com/images/I/71g4poMaQDL._AC_UF1000,1000_QL80_.jpg', 'https://www.amazon.com/Los-Dones-imperfecci%C3%B3n-Bren%C3%A9-Brown/dp/8484454517/ref=sr_1_1?crid=2I60GDKGITGGL&dib=eyJ2IjoiMSJ9.H9ZCRKLf1yIfMGiIywRtFii9wJO60m_yBl94m-whbVY6PNKoItbpqsp48KJBEEvhiTyQlqRtjWMYWDPVhuO0muL_8FIZ8W7G52DNVhST1gw.DzXNTCysPzkWtgZwX9', 'Los dones de la imperfección'),
(2, 1, 'Una reflexion profunda sobre la resiliencia y encontrar proposito', 'https://images.cdn2.buscalibre.com/fit-in/360x360/e4/c4/e4c4253fb8b73a930a6d8495e05598f9.jpg', 'https://www.amazon.com/El-hombre-busca-sentido-Spanish/dp/8425432022/ref=sr_1_1?crid=2ECCNFSQM8PEG&dib=eyJ2IjoiMSJ9.GU7J9RQyeTsAQ8YfXNQLLP6VZRrSNOkJwcl9gHJwI7J8kuNGlu1rXm6GdCcqkhdLkSb4ya151hCLFFYtMqJOO7vzhmo9K91TtGZIBUf53cQ5Q5imP0s_jujf9NF1RijcMSiOWafXCbB', 'Un hombre en busca de sentido'),
(3, 1, 'Un relato sincero y esperanzador dobre la salud mental desde la experiencia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyq7uFhnv9hdi-ZvU4D9OMr8-tIl_0eVi8fw&s', 'https://www.amazon.com/Por-las-voces-vuelven-Spanish/dp/6070792785/ref=tmm_pap_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.aXrQtD6LjNX7xdwiuZgZwBzM89pE20dz43QD1SPH76k.UjtACL7gGSuFpZGqMs27DH5E_k3lfq-JKVTyYieWTX4&qid=1743477359&sr=8-1', 'Por si las voces vuelven'),
(4, 1, 'Ayuda a construir hábitos positivos que impacten en tu bienestar', 'https://cdn.pacifiko.com/image/cache/catalog/p/YjBkNjk1OW_1-1000x1000.jpg', 'https://www.amazon.com/H%C3%A1bitos-at%C3%B3micos/dp/B08JWXX27C/ref=sr_1_1?crid=TNZ8S91YHU91&dib=eyJ2IjoiMSJ9.K1UNPq4fItUTVotc5VIu6e6O_Lhly_6C3qLA1vlwp-MnXGPEmWxsD7Y6hyEc3_-p9uuCeubiaryH7JKDoaPepLv7C2GcVAymnocQRns_bP0B-R0n8fzpkoxcFF21UYzo0vONH6jm372GBrNk7', 'Hábitos atómicos'),
(5, 1, 'Basado en la terapia de aceptacion y compromiso te enseña a dejar de luchar', 'https://m.media-amazon.com/images/I/71XYA6ZEIHL.jpg', 'https://www.amazon.com/trampa-felicidad-sufrir-comienza-Spanish-ebook/dp/B01MQYG6JN/ref=sr_1_1?crid=3TG3DC2UCS5TU&dib=eyJ2IjoiMSJ9.RnpR5BcB-5YFyX1C8NxxBlpgqRQiHoWwMPbSbZf8oFY-aIVmoEHcVaf3psawD6GERZntIPOB51XEIVqbJmMnDjrpDjyxKWK_DnjZFFVTSbJup05iWEOFNXm7JZKc', 'La trampa de la felicidad'),
(6, 1, 'Introduce la práctica de la atencion plena para reducir el estrés', 'https://m.media-amazon.com/images/I/71FWT+l7GqL._AC_UF1000,1000_QL80_.jpg', 'https://www.amazon.com/Mindfulness-vida-cotidiana-quiera-Spanish-ebook/dp/B073XW5473/ref=sr_1_1?crid=Y285KGOS0FFL&dib=eyJ2IjoiMSJ9.EpZcMVYQBrGE5NbLoqhdmKZeVbu47FhYNv3E4K7IMBY8GmQUH-lzbn-2pvy_iKd_coUJTOqc6SvojVlnH8dRkrjpZFaJOwaVf7Zzc_QnAh9bM_oSdDtxfjVoMUDm', 'Mindfulness en la vida cotidiana'),
(7, 1, 'Un clasico sobre como liberarse de patrones de pensamiento negativos', 'https://www.libreriainternacional.com/media/catalog/product/9/7/9788499085524_1.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=375&width=243', 'https://www.amazon.com/Tus-zonas-err%C3%B3neas-infelicidad-Erroneous/dp/1644730057/ref=sr_1_1?crid=114M4ANRS5ZFE&dib=eyJ2IjoiMSJ9.pykoRnazY1LNB187gtC9260REuEmftpqbjXMceCNpyf-rpDV-kvqjCl_20t1ZqLR7TdUShHLWGCObtAf37Y6p8yM91RsOuEI3Ye4P4avIdHtuGRZra9JA0q9P0WjG', 'Tus zonas erroneas'),
(8, 1, 'Con humor e inteligencia analiza como a veces nos saboteamos', 'https://images-na.ssl-images-amazon.com/images/I/81iPEeQTJ4L._AC_UL210_SR210,210_.jpg', 'https://www.amazon.com/El-arte-amargarse-vida-Spanish/dp/8425431891/ref=sr_1_3?crid=2M9AM5BN1P9HB&dib=eyJ2IjoiMSJ9.YIgvN2dN_bZIIQ126WbOjV6MCBELrC-DvBOBwJELOayxAP3hUBXVu6U3DEfsmtAaNrR_9DUCmmpiFn4_E_VVG9eUcXZI0KXddr__WK4MWMVDpGmk3QesjFhPRLtTwbJOx3HAFpm9ygLO', 'El arte de amargarse la vida'),
(9, 1, 'Combina ciencia y psicologia para ayudarte a gestionar emociones', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYTLdVvAydpSYhziiW6GppVrOTZEqB2nXTbQ&s', 'https://www.amazon.com/C%C3%B3mo-hacer-pasen-cosas-buenas/dp/B088Y1YMWV/ref=sr_1_1?crid=2UMMMGNPPW0ZV&dib=eyJ2IjoiMSJ9.uCbZEurt3Lhuk08TVTwKP-71BwYoyPxWt525WyytkUvERx40ht-dHBO8Eem4qLiHNMfW8XMaenQka4zn3s4x7bZxcH9Z3A8W6gK8G5dsTQnTbmY09v99X9VPZQbEzWeDW3hQlAxI', 'Como hacer que te pasen cosas buenas'),
(10, 1, 'Una reflexion sobre la cultura productiva', 'https://covers.storytel.com/jpg-640/9789877446654.30b4510f-4ea9-4979-a1c4-d027122ed95b?optimize=high&quality=70&width=600', 'https://www.amazon.com/sociedad-del-cansancio-detallada-Byung-Chul-ebook/dp/B09MLYPR32/ref=sr_1_4?crid=2MNP6ENF8ZC0U&dib=eyJ2IjoiMSJ9.JUwL1OnUTSbDntt5UGeeSZ3XQ1i_L537h9Wv4x48gt3SPldVLAgueflBjrK-r9fAzNDiEMdt9ZzrU830AW1SdCVD0K38wv7ghvo7roPB7mIUlLy29mqSZk14_', 'La sociedad del cansancio'),
(11, 1, 'Enseña un proceso sencillo y poderoso para cuestionar los pensamientos negativos', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2zMwasYn6e7dp65pvx0IUKIJgl0itDTP3lg&s', 'https://www.amazon.com/Amar-que-Crecimiento-personal-Spanish-ebook/dp/B01B4RB4QQ/ref=sr_1_1?crid=2TQ98QSURQXMG&dib=eyJ2IjoiMSJ9.y7acEDVP2S386KwrUNpmwfHavQqIzX0y8ty10tu9-jSUZ9k7OU_6rLNhzTRi9hMOdA-jjptasHkBY10cRkY1JKDzmdt6TldJFmkMVZztHrs02mrX8yrWTRw1SLFOXlS', 'Amar lo que es'),
(12, 1, 'Sobre como las relaciones influyen en nuestro bienestar emocional', 'https://proassetspdlcom.cdnstatics2.com/usuaris/libros/thumbs/05a1dd64-b05a-4741-a4c7-b8f3bb992b3e/d_1200_1200/portada_encuentra-tu-persona-vitamina_marian-rojas-estape_202106071658.webp', 'https://www.amazon.com/Encuentra-persona-vitamina-Vitamin-Spanish/dp/6073902328/ref=sr_1_1?crid=30IXL2S5DSU4G&dib=eyJ2IjoiMSJ9.iMWXT8BClfGlp747qsVcKDUmZ6lD2J_b4XuF2ivoD0gDBG9S4ky01e2-UMRCOmAT5nogjz5MG_oUIhtizNG_acAvL39rtR3-7yEzw-_ggBDpUfo7PGgJxiRFTrLsG_Vz', 'Encuentra tu persona vitamina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologos`
--

CREATE TABLE `psicologos` (
  `ID_psicologo` int(11) NOT NULL,
  `ID_Calificacion` int(11) DEFAULT NULL,
  `Nombre_psicologo` varchar(255) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo_psicologo` varchar(100) DEFAULT NULL,
  `Descripcion_psicologo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `psicologos`
--

INSERT INTO `psicologos` (`ID_psicologo`, `ID_Calificacion`, `Nombre_psicologo`, `Telefono`, `Correo_psicologo`, `Descripcion_psicologo`) VALUES
(1, 1, 'Dra. Laura Martínez', '88887777', 'marianaf@bienestar.com', 'Psicóloga clínica con más de 12 años de experiencia en salud mental, especializada en el tratamiento de ansiedad, depresión y manejo de estrés. Ayuda a los pacientes a encontrar bienestar emocional mediante la terapia cognitivo-conductual.'),
(2, 2, ' Dr. Carlos Gómez', '77776666', 'carlos.gomez@psicologia.com', 'Psicólogo con enfoque en salud mental y bienestar emocional. Especializado en terapia de pareja, manejo de estrés y resolución de conflictos emocionales. Ayuda a sus pacientes a mejorar su calidad de vida y gestionar sus emociones.'),
(3, 1, ' Dra. Sofía Rodríguez', '99998888', 'sofia.rodriguez@psicologia.com', 'Psicóloga especializada en salud mental y bienestar emocional con más de 8 años de experiencia. Trabaja con personas que enfrentan problemas emocionales y ofrece apoyo en crisis, estrés postraumático, depresión y ansiedad.'),
(4, 1, 'Dr. José Pérez', '55554444', 'jose.perez@psicologia.com', 'Psicólogo con enfoque en salud mental, especializado en trastornos de ansiedad, depresión y trauma. Utiliza la terapia basada en la evidencia para ayudar a sus pacientes a superar sus desafíos emocionales y a desarrollar un bienestar duradero.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_Rol` int(11) NOT NULL,
  `Nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_Rol`, `Nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `ID_rol` int(11) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(255) DEFAULT NULL,
  `Estado` enum('activo','inactivo') DEFAULT 'activo',
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `ID_rol`, `Apellido`, `Correo`, `Contraseña`, `Estado`, `Nombre`) VALUES
(1, 1, 'Lara', 'fernandol@bienestar.com', '123456', 'activo', 'Fernando'),
(2, 2, 'Sancho', 'saras@bienestar.com', 'clave123', 'activo', 'Sara');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs_articulos`
--
ALTER TABLE `blogs_articulos`
  ADD PRIMARY KEY (`ID_Blog`),
  ADD KEY `FK_Blog_Usuario` (`ID_usuario`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`ID_Calificacion`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `diario`
--
ALTER TABLE `diario`
  ADD PRIMARY KEY (`Id_diario`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`Id_favoritos`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Blog` (`ID_Blog`),
  ADD KEY `ID_Libro` (`ID_Libro`),
  ADD KEY `ID_calificacion` (`ID_calificacion`);

--
-- Indices de la tabla `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`ID_Publicacion`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID_Libro`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`ID_psicologo`),
  ADD UNIQUE KEY `Correo_psicologo` (`Correo_psicologo`),
  ADD KEY `ID_Calificacion` (`ID_Calificacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_Rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `ID_rol` (`ID_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs_articulos`
--
ALTER TABLE `blogs_articulos`
  MODIFY `ID_Blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `ID_Calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `diario`
--
ALTER TABLE `diario`
  MODIFY `Id_diario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `Id_favoritos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historias`
--
ALTER TABLE `historias`
  MODIFY `ID_Publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `ID_Libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `ID_psicologo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blogs_articulos`
--
ALTER TABLE `blogs_articulos`
  ADD CONSTRAINT `FK_Blog_Usuario` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `diario_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_usuario`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`ID_Blog`) REFERENCES `blogs_articulos` (`ID_Blog`),
  ADD CONSTRAINT `favoritos_ibfk_3` FOREIGN KEY (`ID_Libro`) REFERENCES `libros` (`ID_Libro`),
  ADD CONSTRAINT `favoritos_ibfk_4` FOREIGN KEY (`ID_calificacion`) REFERENCES `calificaciones` (`ID_Calificacion`);

--
-- Filtros para la tabla `historias`
--
ALTER TABLE `historias`
  ADD CONSTRAINT `historias_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD CONSTRAINT `psicologos_ibfk_1` FOREIGN KEY (`ID_Calificacion`) REFERENCES `calificaciones` (`ID_Calificacion`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_rol`) REFERENCES `roles` (`ID_Rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
