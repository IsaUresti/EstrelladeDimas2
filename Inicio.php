﻿<?php
session_start();

// Verificar si el usuario está logueado
$isLoggedIn = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Estrella De Dimas</title>
    <link rel="stylesheet" href="CSS/Estilo.css" />
</head>
<body>

    <header>
        <!-- Inicio de encabezado -->
        <div class="container-hero">
            <div class="container-hero hero">
                <div class="customer-support">
                    <i class="fa-solid fa-location-dot" style="color: #011941;"></i>
                    <div class="content-customer-support">
                        <span class="text">Av. de los pintores #725, Burocrata, S.L.P</span>
                    </div>
                </div>
                <div class="customer-contact">
                    <i class="fa-solid fa-phone" style="color: #011941"></i>
                    <div class="content-customer-contact">
                        <span class="number">444-123-3560</span>
                    </div>
                </div>
                <div class="container-user">
                    <?php if ($isLoggedIn): ?>
                    <!-- Si el usuario está logueado, mostrar el icono de editar perfil y el botón de cerrar sesión -->
                    <a href="PHP/Perfil.php" style="text-decoration: none;">
                        <i class="fa-solid fa-pen" style="color: #011941;"></i> 
                    </a>
                    <a href="PHP/Cierre_Sesion.php" style="text-decoration: none;">
                        <button style="background: none; border: none; color: #011941; cursor: pointer;">
                            <i class="fa-solid fa-sign-out-alt" style="color: #011941;"></i> Cerrar sesión
                        </button>
                    </a>
                    <?php else: ?>
                    <!-- Si el usuario no está logueado, mostrar el icono de iniciar sesión -->
                    <a href="Login.html" style="text-decoration: none;">
                        <i class="fa-solid fa-user" style="color: #011941;"></i> 
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Barra de Navegación -->
        <div class="container-navbar" id="navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars" style="color: #011941;"></i>
                <ul class="menu">
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Galeria">Galeria</a></li>
                    <li><a href="#Espacios">Espacios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Inicio de imagen -->
    <section class="banner">
        <div class="content-banner">
            <h2>Especialidad en carnes al carbon</h2>
           <!-- Verificamos si el usuario está logueado -->
        <a href="<?php echo $isLoggedIn ? 'Reservas.html' : 'Login.html'; ?>">
            Reservar
        </a>
        </div>
    </section>

    <!-- Secciones del sitio -->
    <main class="main-content">

        <section class="container-nosotros" id="Nosotros">
            <img src="Imagenes/tbone.png" width="500" height="300" />
            <div class="text-nosotros">
                <h1 class="heading-1">ACERCA DE NOSOTROS</h1>
                <div class="container-us">
                    <p>
                        Nuestra Historia <br>
                        Somos un restaurante especializado en carnes al carbon, que abrió sus puertas en 1994
                    </p>
                </div>
            </div>
        </section>

        <section class="container-galeria" id="Galeria">
            <h1 class="heading-2">GALERIA</h1>
            <span class="slider" id="slider1"></span>
            <span class="slider" id="slider2"></span>
            <span class="slider" id="slider3"></span>
            <span class="slider" id="slider4"></span>
            <span class="slider" id="slider5"></span>
            <span class="slider" id="slider6"></span>
            <span class="slider" id="slider7"></span>
            <span class="slider" id="slider8"></span>
            <span class="slider" id="slider9"></span>
            <span class="slider" id="slider10"></span>
            <span class="slider" id="slider11"></span>

            <div class="imgContainer">

                <div class="slide_div" id="slide_1">
                    <img src="Imagenes/1.png" alt="" class="img" id="img1" />
                    <a href="#slider1" class="button" id="button1"></a>
                </div>
                <div class="slide_div" id="slide_2">
                    <img src="Imagenes/2.png" alt="" class="img" id="img2" />
                    <a href="#slider2" class="button" id="button2"></a>
                </div>
                <div class="slide_div" id="slide_3">
                    <img src="Imagenes/3.png" alt="" class="img" id="img3" />
                    <a href="#slider3" class="button" id="button3"></a>
                </div>
                <div class="slide_div" id="slide_4">
                    <img src="Imagenes/4.png" alt="" class="img" id="img4" />
                    <a href="#slider4" class="button" id="button4"></a>
                </div>
                <div class="slide_div" id="slide_5">
                    <img src="Imagenes/5.png" alt="" class="img" id="img5" />
                    <a href="#slider5" class="button" id="button5"></a>
                </div>
                <div class="slide_div" id="slide_6">
                    <img src="Imagenes/6.png" alt="" class="img" id="img6" />
                    <a href="#slider6" class="button" id="button6"></a>
                </div>
                <div class="slide_div" id="slide_7">
                    <img src="Imagenes/7.png" alt="" class="img" id="img7" />
                    <a href="#slider7" class="button" id="button7"></a>
                </div>
                <div class="slide_div" id="slide_8">
                    <img src="Imagenes/8.png" alt="" class="img" id="img8" />
                    <a href="#slider8" class="button" id="button8"></a>
                </div>
                <div class="slide_div" id="slide_9">
                    <img src="Imagenes/9.png" alt="" class="img" id="img9" />
                    <a href="#slider9" class="button" id="button9"></a>
                </div>
                <div class="slide_div" id="slide_10">
                    <img src="Imagenes/10.png" alt="" class="img" id="img10" />
                    <a href="#slider10" class="button" id="button10"></a>
                </div>
                <div class="slide_div" id="slide_11">
                    <img src="Imagenes/11.png" alt="" class="img" id="img11" />
                    <a href="#slider11" class="button" id="button11"></a>
                </div>
            </div>

        </section>

        <section class="container-espacios" id="Espacios">
            <h1 class="heading-3">ESPACIOS</h1>
        </section>

        <section class="container-contacto" id="Contacto">
            <h1 class="heading-4">CONTACTO</h1>
        </section>
    </main>

    <!-- Código de iconos -->
    <script src="https://kit.fontawesome.com/9fce921e25.js" crossorigin="anonymous"></script>

</body>
</html>
