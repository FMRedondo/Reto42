<?php
/*
Template Name: Nueva Home
*/

the_content();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/responsive.css">
    <title>Reto42</title>
</head>

<body>


    <header class="cabecera">
        <div class="wrapper">
            <img src="medios/logo.png" alt="Logo Reto42" class="logo">
            <nav id="menu">
                <a class="enlace__menu active" href="#">Inicio</a>
                <a class="enlace__menu" href="#">Blog</a>
                <a class="enlace__menu" href="#">Programas</a>
                <a class="enlace__menu" href="#">Contacto</a>
                <div class="area__clientes">
                    <a href="#" class="acceso__alumnos">acceso alumnos <i class="fas fa-chevron-right"></i></a>
                </div>
            </nav>
            <div class="hamburger">
                <div class="_layer -top"></div>
                <div class="_layer -mid"></div>
                <div class="_layer -bottom"></div>
            </div>
            <nav class="menuppal">
                <ul>
                    <li><a href="#" class="enlace__menu">Inicio</a></li>
                    <li><a href="#" class="enlace__menu">Blog</a></li>
                    <li><a href="#" class="enlace__menu">Programas</a></li>
                    <li><a href="#" class="enlace__menu">contacto</a></li>
                    <li><a href="#" class="enlace__menu acceso__alumnos">acceso alumnos <i
                                class="fas fa-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banner">
        <h2 class="titulo__banner">21 días crean un hábito, <span class="circulo__cuarenta">42</span> un estilo de vida
        </h2>
        <p class="texto__banner">El programa de pérdida de peso Online que triunfa entre los que no quieren seguir una
            dieta más</p>

            <a class="botones">Quiero saber mas <i class="fas fa-chevron-right"></i></a>
    </div>


    <section class="testimonios">
        <h3 class="testimonios__titulo">Todo logro empieza con la decisión de intentarlo</h3>
        <p class="parrafo__testimonios">Da el paso... Vívelo</p>
        <div class="barra__separatoria"></div>
        <div class="lista__testimonios">
            <div class="testimonio">
                <figure>
                    <img src="medios/testimonio1.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio">
                <figure>
                    <img src="medios/testimonio2.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio ocultar__testimonio">
                <figure>
                    <img src="medios/testimonio3.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio">
                <figure>
                    <img src="medios/testimonio4.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio ocultar__testimonio">
                <figure>
                    <img src="medios/testimonio5.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio">
                <figure>
                    <img src="medios/testimonio6.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio ocultar__testimonio">
                <figure>
                    <img src="medios/testimonio7.jpg" alt="#">
                </figure>
            </div>
            <div class="testimonio ocultar__testimonio">
                <figure>
                    <img src="medios/testimonio8.jpg" alt="#">
                </figure>
            </div>

        </div>
        </div>
    </section>




    <section class="media__pantalla">
        <h3 class="media__pantalla__titulo">Que no te cuenten cuentos ni calorías</h3>
        <p class="parrafo__testimonios">Tenemos el plan perfecto</p>
        <div class="barra__separatoria"></div>
        <figure>
            <img src="medios/media__pantalla.svg" alt="imagen explicativa de reto42" class="media__pantalla__img">
        </figure>
    </section>

    <section class="excusas">
        <h3 class="media__pantalla__titulo">Con reto 42 se te acabaron las excusas</h3>
        <p class="parrafo__testimonios">te damos todas las herramientas para conseguir tu objetivo</p>
        <div class="barra__separatoria"></div>

        <div class="todas__excusas">

            <div class="excusa">
                <img src="medios/logo__fuerza.jpg" alt="rutina a tu nivel">
                <p class="parrafo__excusas">Rutinas adaptadas a tu nivel</p>
            </div>
            <div class="excusa">
                <img src="medios/logo__manzana.jpg" alt="plan de alimentacion">
                <p class="parrafo__excusas">Plan de alimentación semanal</p>
            </div>
            <div class="excusa">
                <img src="medios/logo_seguimiento.jpg" alt="seguimiento diario">
                <p class="parrafo__excusas">Seguiento diario y cercano</p>
            </div>
            <div class="excusa">
                <img src="medios/logo_seminario.jpg" alt="seminarios nutricion y deporte">
                <p class="parrafo__excusas">Seminarios de nutrición y deporte</p>
            </div>
            <div class="excusa">
                <img src="medios/logo_motivacion.jpg" alt="motivación">
                <p class="parrafo__excusas">Motivación</p>
            </div>
            <div class="excusa">
                <img src="medios/logo_whatsapp.jpg" alt="grupo de whatsapp">
                <p class="parrafo__excusas">Grupos reducidos de Whatsapp</p>
            </div>
        </div>
    </section>

    <section class="parte__tablas">
        <h3 class="media__pantalla__titulo">qué es lo que te ofrece reto42 que no vas a encontrar en otros programas de
            perida de peso</h3>
        <div class="iconos__tablas">
            <img src="#" alt="motivacion">
            <img src="#" alt="Entrenamientos">
            <img src="#" alt="nutricion">
        </div>

        <div class="tabla">
            <div class="nutricion__tabla">
                <h4>Nutrición</h4>
                <div class="parrafo__tabla">
                    <p><i class="fas fa-check"></i> 0% Ultra procesados</p>
                    <p><i class="fas fa-check"></i> 1 Menu nuevo cada día</p>
                    <p><i class="fas fa-check"></i> +100 Recetas</p>
                    <p><i class="fas fa-check"></i> Sin pesar los alimentos</p>
                    <p><i class="fas fa-check"></i> Recetas rápidas y fáciles de elaborar</p>
                    <p><i class="fas fa-check"></i> Menús pensados para toda la familia</p>
                    <p><i class="fas fa-check"></i> Consultas ilimitadas a tu nutricionista</p>
                    <p><i class="fas fa-check"></i> Prohibido pasar hambre</p>
                </div>
            </div>

            <div class="nutricion__tabla">
                <h4>Nutrición</h4>
                <div class="parrafo__tabla">
                    <p><i class="fas fa-check"></i> Podrás realizar la ectividad que más te motive para lograr tu
                        objetico (andar, pádel, surf, ect.)</p>
                    <p><i class="fas fa-check"></i> 1 Menu nuevo cada día</p>
                    <p><i class="fas fa-check"></i> +100 Recetas</p>
                    <p><i class="fas fa-check"></i> Sin pesar los alimentos</p>
                    <p><i class="fas fa-check"></i> Recetas rápidas y fáciles de elaborar</p>
                    <p><i class="fas fa-check"></i> Menús pensados para toda la familia</p>
                    <p><i class="fas fa-check"></i> Consultas ilimitadas a tu nutricionista</p>
                    <p><i class="fas fa-check"></i> Prohibido pasar hambre</p>
                </div>
            </div>

            <div class="nutricion__tabla">
                <h4>Nutrición</h4>
                <div class="parrafo__tabla">
                    <p><i class="fas fa-check"></i> Podrás realizar la ectividad que más te motive para lograr tu
                        objetico (andar, pádel, surf, ect.)</p>
                    <p><i class="fas fa-check"></i> 1 Menu nuevo cada día</p>
                    <p><i class="fas fa-check"></i> +100 Recetas</p>
                    <p><i class="fas fa-check"></i> Sin pesar los alimentos</p>
                    <p><i class="fas fa-check"></i> Recetas rápidas y fáciles de elaborar</p>
                    <p><i class="fas fa-check"></i> Menús pensados para toda la familia</p>
                    <p><i class="fas fa-check"></i> Consultas ilimitadas a tu nutricionista</p>
                    <p><i class="fas fa-check"></i> Prohibido pasar hambre</p>
                </div>
            </div>


            <div class="nutricion__tabla">
                <h4>Nutrición</h4>
                <div class="parrafo__tabla">
                    <p><i class="fas fa-check"></i> Podrás realizar la ectividad que más te motive para lograr tu
                        objetico (andar, pádel, surf, ect.)</p>
                    <p><i class="fas fa-check"></i> 1 Menu nuevo cada día</p>
                    <p><i class="fas fa-check"></i> +100 Recetas</p>
                    <p><i class="fas fa-check"></i> Sin pesar los alimentos</p>
                    <p><i class="fas fa-check"></i> Recetas rápidas y fáciles de elaborar</p>
                    <p><i class="fas fa-check"></i> Menús pensados para toda la familia</p>
                    <p><i class="fas fa-check"></i> Consultas ilimitadas a tu nutricionista</p>
                    <p><i class="fas fa-check"></i> Prohibido pasar hambre</p>
                </div>
            </div>
        </div>

            <a href="#" class="botones">quiero estar dentro <i
                class="fas fa-chevron-right"></i></a>

    </section>



    <!--
    SCRIPT
-->
    <script src="script/main.js"></script>
    <script src="https://kit.fontawesome.com/3cefa5cf3b.js" crossorigin="anonymous"></script>

</body>

</html>