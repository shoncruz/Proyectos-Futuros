<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portafolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#inicio"><i class="fa-solid fa-headphones"></i>></i></a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">HABILIDADES</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portafolio" onclick="seleccionar()">PORTAFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
        </header>
    </div>

    <!-- INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/yo.jpg" alt="">
            </div>
            <h1>Esquivel Juan Cruz</h1>
            <h2>Tecnico Superior Desarrollo de Software</h2>
            <div class="redes">
                <a href="https://www.facebook.com/juancruz.esquivel.92/" target="_blank"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/Shoncytuu" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://wa.me/543794731032" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

    <!-- SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <p><span>Hola, soy Esquivel Juancruz.</span>y soy FrontEND developer, me gustaria decir eso algun dia, por
                ahora
                soy un muchacho que tiene un buen futuro por delante en el area de programacion y este es mi primer
                portafolios
                podria hablarles de un monton de cosas sobre mi como por ejemplo, que me encantan los videojuegos,me
                gusta leer, me gusta programar
                me gusta ser bueno con los demas, soy carismatico ,responsable y educado.
                Ademas de todo me gustaria poder dedicarme de lleno al mundo de la programacion.</p>

            <div class="fila">
                <!-- Datos Personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            09-01-2001
                        </li>
                        <li>
                            <strong>Telefono</strong>
                            +54 3794 731032
                        </li>
                        <li>
                            <strong>Email</strong>
                            jcesquivel1232@gmail.com
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>Front END junior</span>
                        </li>
                    </ul>

                </div>
                <!-- Intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-brands fa-xbox fa-beat-fade"></i>
                            <span>X BOX</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones-simple fa-beat-fade"></i>
                            <span>Musica</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book fa-beat-fade"></i>
                            <span>Leer</span>
                        </div>
                        <div class="interes">
                            <i class="fa-sharp fa-solid fa-futbol fa-bounce"></i>
                            <span>Futbol</span>
                        </div>
                        <div class="interes">
                            <i class="fa-sharp fa-solid fa-plane-departure fa-beat"></i>
                            <span>Viajar</span>
                        </div>
                        <div class="interes">
                            <i class="fa-sharp fa-solid fa-table-tennis-paddle-ball fa-beat"></i>
                            <span>Tenis</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-clapperboard fa-beat-fade"></i>
                            <span>Peliculas</span>
                        </div>
                    </div>

                </div>
            </div>
            <a href="https://drive.google.com/drive/folders/1oKzWdqocpAF0HUzjxA5u4BM1ko0hy35S?hl=es" target="_blank">
                <button>
                    Descargar CV <i class="fa-solid fa-download"></i>
                    <span class="overlay"></span>
                </button>
            </a>

        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="skills">
        <div class="contenido-seccion">
            <h2>Habilidades</h2>
            <div class="fila">
                <!-- Habilidades Tecnicas -->
                <div class="col">
                    <h3>Habilidades Tecnicas</h3>
                    <div class="skill">
                        <span>JavaScript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>69%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>MySQL</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Habilidades Profesionales -->
                <div class="col">
                    <h3>Habilidades Profesionales</h3>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Liderazgo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>68%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Project Management</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Adaptabilidad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educacion</h3>
                    <div class="item izq">
                        <h4>Formacion Inicial</h4>
                        <span class="casa">Escuela Primaria n°1 "Manuel Belgrano"</span>
                        <span class="fecha">2006-2012</span>
                        <p>Escuela Primaria Ubicada en la Ciudad de Corrientes,enseñanza basica en cuanto a ciencias
                            sociales
                            y ciencias Naturales
                        </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Bachillerato en Ciencias Sociales y Computacion</h4>
                        <span class="casa">Colegio Secundario "Fray Jose de la Quintana"</span>
                        <span class="fecha">2013-2018</span>
                        <p>Ubicada en la Ciudad de Corrientes,Enseñanza de nivel intermedia en cuanto a Computacion
                            y ciencias sociales relacionadas a la politica.
                        </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Desarrollo de Software</h4>
                        <span class="casa">Instituto Superior "Carmen Molina del Llano"</span>
                        <span class="fecha">2022-2024</span>
                        <p>Instituto ubicado en la Capital Correntina,Enseñanza de Nivel Intermedio con la cual aprendes varios
                            lenguajes de programacion para poder ser un desarrollador WEB 
                        </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia</h3>
                    <div class="item der">
                        <h4>Auxiliar de Robotica</h4>
                        <span class="casa">Municipalidad de Corrientes</span>
                        <span class="fecha">2020-2022</span>
                        <p>Me Encargaba de la Calibracion y de Diseñar las Estructuras para armar proyectos roboticos.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Auxiliar de Impresion 3D</h4>
                        <span class="casa">MYA 3D</span>
                        <span class="fecha">2022-2022</span>
                        <p>Calibracion de Impresoras y limpieza de las Mismas</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Tecnico en Mantenimiento y Soporte de PCs</h4>
                        <span class="casa">La Casa Informatica(Emprendimiento)</span>
                        <span class="fecha">2023</span>
                        <p>Nos Encargamos de todo tipo de Mantenimiento y Asesoramiento en cuanto a Mejoras y solucionamos cualquier problema 
                            a nuestro Alcance
                        </p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- PORTAFOLIO -->
    <section id="portafolio" class="portafolio">
        <div class="contenido-seccion">
            <h2>PORTAFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="img/p1.jpeg" alt="">
                    <div class="overlay">
                        <h3>Proyecto Cultural</h3>
                        <p>Foro de investigacion Natural Correntina</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p2.jpeg" alt="">
                    <div class="overlay">
                        <h3>Proyecto Cultural</h3>
                        <p>Foro de investigacion Natural Correntina</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p3.jpg" alt="">
                    <div class="overlay">
                        <h3>Ejemplo de Crud</h3>
                        <p>Diseño Basico</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p4.jpg" alt="">
                    <div class="overlay">
                        <h3>Ejemplo JavaScript</h3>
                        <p>Piedra , Papel o Tijera</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenedor-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <form class="col" method="post" action="conexion.php">
                    <input type="text" placeholder="Tú Nombre">
                    <input type="text" placeholder="Número Telefónico">
                    <input type="text" placeholder="Dirección">
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button type="submit" name="enviar">
                        Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </form>
                <!-- Mapa -->
                <div class="col">
                    <img src="img/map.jpg" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                Telefono: 3794731032
                            </li>
                            <li>
                                <i class="fa-regular fa-envelope"></i>
                                Email: jcesquivel1232@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com/juancruz.esquivel.92/" target="_blank"><i
                    class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/Shoncytuu" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://wa.me/543794731032" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>