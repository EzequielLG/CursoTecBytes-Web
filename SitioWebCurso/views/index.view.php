<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fdd2e8457c.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>La cueva de Skywalker</title>
</head>
<body>

    

    <!-- etiquetas para la barra de navegación -->
    <div class="navbar">
        
        <div class="derecha"> <!-- parte izquierda de la navbar -->

            <i class="fas fa-mountain"></i>

        </div>


        <div class="izquierda"> <!-- parte izquierda de la navbar -->

            <ul>

                <li>
                    <a href="javascript:document.getElementById('aboutUs').scrollIntoView(true);" id="btn__nosotros"
                    onmouseover="javascript: hoverOpcion('btn__nosotros')"
                    onmouseout="javascript: outOpcion('btn__nosotros')">
                    Nosotros
                    </a>
                </li>

                <li>
                    <a href="javascript:document.getElementById('historia').scrollIntoView(true);" id="btn__historia" onmouseover="javascript: hoverOpcion('btn__historia')" onmouseout="javascript: outOpcion('btn__historia')">
                    Historia
                    </a>
                </li>
                
                <li>
                    <a href="javascript:document.getElementById('galeria').scrollIntoView(true);" id="btn__Galeria" onmouseover="javascript: hoverOpcion('btn__Galeria')" onmouseout="javascript: outOpcion('btn__Galeria')">
                    Galeria
                    </a>
                </li>

                <li>
                    <a href="javascript:document.getElementById('contacto').scrollIntoView(true);" id="btn__contacto" onmouseover="javascript: hoverOpcion('btn__contacto')" onmouseout="javascript: outOpcion('btn__contacto')">
                    Contacto
                    </a>
                </li>

                <li>
                    <a href="javascript:document.getElementById('ubicacion').scrollIntoView(true);" id="btn_ubicacion" onmouseover="javascript: hoverOpcion('btn_ubicacion')" onmouseout="javascript: outOpcion('btn_ubicacion')">
                    Ubicación
                    </a>
                </li>
            
            </ul>

        </div>

    </div>

    <!-- sección de la parte de Inicio -->

    <section class="banner__paginaInicio" id="banner__paginaInicio">

        <h1 id="h1">La cueva de Skywalker</h1>

        <h3>Lorem ipsum dolor sit Lorem ipsum <br/> dolor sit</h3>

        <audio id="audio" controls>
            <source type="audio/mpeg" src="song/cartoon.mp3">
        </audio>

        <button class="btn__explorar__inicio" id="btn__explorar__inicio"
        onmouseover="javascript: void(document.getElementById('btn__explorar__inicio').style.fontSize='40px')"
        onmouseout="javascript: void(document.getElementById('btn__explorar__inicio').style.fontSize='30px')"
        onclick="javascript: audio.play();">
        Explorar
        </button>

    </section>


    <!-- sección quienes somos  -->
    <section class="aboutUs" id="aboutUs">
        
        <!-- texto correspondiente a la sección "Quienes somos" -->
        <div class="texto__aboutUs">
        
            <h2>Quiénes somos</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non blandit aliquet et et
                , aliquam sit. Diam scelerisque lacus, mattis id pulvinar volutpat varius suspendisse 
                amet. At sed risus, quam suscipit venenatis, ipsum id quis. 
            </p>

        </div>

        <!-- Imágen de la seccion "quienes somos" -->
        <div class="img__aboutUs">

            <img src="img/inicio-grogu.jpg" alt="Grugu">
            <div class="cuadro__amarillo"></div>

        </div>
    
    </section> 


    <!-- sección Historia  -->
    <section class="historia" id="historia">

        <!-- contenedor lado izquierdo de la seccion  -->
        <div class="izquierda__historia"> 

            <div class="contenedor__texto__historia">

                <h2>Nuestra Historia</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Viverra a consectetur sagittis et enim sed pharetra. 
                    Fames vestibulum congue pellentesque morbi pharetra ultrices quam cursus. 
                    Ullamcorper semper vestibulum et pellentesque eget. 
                </p>

                <a href = "#galeria" style = "text-decoration: none; color: #FFFFFF;">
                    <div class="centrado">
                        <i class="fas fa-chevron-down"></i>   
                    </div>
                </a>


            </div>

        </div>

        <!-- contenedor lado derecho de la seccion  -->
        <div class="ilustracion__historia">

            <img src="img/undraw_toy_car_7umw.svg" alt="">

        </div>

    </section>


    <!-- sección Historia  -->
    <section class="galeria" id="galeria">

        <!-- contenedor de las imagenes  -->
        <div class="contenedor__imagenes__galeria" id = "contenedor__imagenes__galeria">

            <!-- creamos una 'tarjeta' por cada imagen de la galeria  -->

            <script>
                cargaGaleria();
            </script>

        </div>

        <!-- boton seccion de galeria  -->

        <div class="centrado">
             <button class="btn__siguiente__galeria" id="btn__siguiente__galeria" onclick="javascript: cargaGaleria();"><i class="fas fa-caret-down"></i></button>  
        </div>


    </section>


    <!-- seccion  contacto -->

    <section class="contacto" id="contacto">
        
        <form action="" class="formulario__contacto" onsubmit = "return confirmarDatos();">
            <div class="datos__contacto">
                
                <h2>Escríbenos</h2>

                <hr>
                
                <div class="casilla">
                    <p>Nombre</p>
                    <input type="text" placeholder="" name="" id="nombre" required>
                </div>

                <div class="casilla">
                    <p>Apellidos</p>
                    <input type="text" placeholder="" name="" id="apellidos" required>
                </div>

                <div class="casilla">
                    <p>Teléfono</p>
                    <input type="text" placeholder="" name="" id="telefono" required>
                </div>

                <div class="casilla">
                    <p>email</p>
                    <input type="email" placeholder="" name="" id="email" required>
                </div>
            </div>


            <div class="mensaje__btnEnviar__contacto">

                <div class="mensaje">
                    <p>Mensaje</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Enviar" >
                </div>

                

            </div>
        </form>    

    </section>


    <section class="ubicacion" id="ubicacion">

        <div class="contenedorIzquierda__ubicacion">
            <h2>Ubicación</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>


            <p>Varius eu morbi non tellus nunc. Nam suscipit aenean gravida vel sollicitudin dignissim cursus.</p>

            <p>
                Non mauris luctus quam vulputate.
            </p>
        </div>

        <div class="contenedorDerecha__ubicacion">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.9911429303718!2d-99.16678074846334!3d19.370686653553562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe73f356a90f47ffb!2sFant%C3%A1stico%20Comics!5e0!3m2!1ses-419!2smx!4v1616912795253!5m2!1ses-419!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>


    <footer>
        <h2>La cueva de Skywalker</h2>
        
        <div class="redes__sociales">

            <a href="enlaceJS" id="facebook"><div class="facebook"><i class="fab fa-facebook-square"></i></div></a>
            <a href="enlaceJS" id="instagram"><div class="instagram"><i class="fab fa-instagram"></i></div></a>
            <a href="enlaceJS" id="twitter"><div class="twitter"><i class="fab fa-twitter"></i></div></a>

        </div>

        <p>Copyright TecBytes & Lozanosoft - 2021</p>
                
    </footer>


</body>
</html>