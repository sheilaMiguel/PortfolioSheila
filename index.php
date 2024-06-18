<html>

<head>
	<title>Sheila Miguel Gadea</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="img/favii.png" />
	<script type="text/javascript" src="js/javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />

</head>

<!-- Popover Polyfill -->
<link rel="stylesheet" href="/shared/third_party/popover/popover.css">
<script src="/shared/third_party/popover/popover.iife.min.js" type="module"></script>

<!-- Shared styles and scripts, applied to each page -->
<link rel="stylesheet" href="css/styles.css">
<script src="/css/scripts.js"></script>

<!-- Page specific styles -->
<link rel="stylesheet" href="../css/styles.css">



<body id="cabecera">
	<!--HEADER-->
	<div id="sticky-parallax-header">


		<p>Sheila Miguel Gadea<br>
			<span class="WebDeveloper">Web Developer</span>
		</p>

		<nav class="navVersionNormal">
			<a href="#curriculum"><span class="botonera">Curriculum</span></a>
			<a href="#misTrabajos"><span class="botonera">Proyectos</span></a>
			<a href="#lenguajes"><span class="botonera">Lenguajes</span></a>
			<a href="#contacto"><span class="botonera">Contacto</span></a>
		</nav>


	</div>


	<div class="contenedorMenu">
		<nav class="navVersionMini">
			<a href="#curriculum"><span class="botoneraM">Curriculum</span></a>
			<a href="#misTrabajos"><span class="botoneraM">Proyectos</span></a>
			<a href="#lenguajes"><span class="botoneraM">Lenguajes</span></a>
			<a href="#contacto"><span class="botoneraM">Contacto</span></a>
		</nav>
	</div>

	<!--SOBRE MI-->
	<div class="contenedor" id="sobreMi">
		<!--IMGGG-->
		<div class="galeriaIMGsobremi" style="padding-top: 55px;">
			<div id="fotoContainer">
				<img src="img/foto1.png" id="foto" />
			</div><br>
			<input type="button" value="Siguiente" onClick="siguiente()" id="textoCV" class="botonSiguiente" /><br><br><br>
		</div>

		<!--TEXTO-->
		<div class="sobreMiTexto">
			<br>
			<h2 align="center" class="titleh2"> SOBRE MÍ </h2><br><br>

			<p class="timesNewRoman textjustify">Bienvenidos a <span class="negrita">mi sitio web personal</span>, donde les contaré un poco sobre mi emocionante viaje desde la <span class="cursiva">Educación Primaria</span> hasta el <span class="cursiva">Desarrollo Web</span>.</p>

			<p class="timesNewRoman textjustify">Me gradué en Educación Primaria con mención en Educación física. Durante mi tiempo en la universidad, me di cuenta de que también tenía una profunda fascinación por la tecnología. Siguiendo mi instinto, decidí cambiar mi rumbo hacia el mundo del <span class="cursiva"><span class="negrita">desarrollo web.</span></span> <br>Mi nueva travesía está siendo emocionante y desafiante. </p><br>

			<p class="timesNewRoman textjustify">Destaco por mi constancia y por las ganas de continuar aprendiendo y evolucionando profesionalmente. Siento emoción ante la idea de participar en nuevos proyectos, aportando mi entusiasmo y compromiso, así como mi habilidad para trabajar de en equipo.</p><br>
			<p class="timesNewRoman textjustify">Me considero una programadora full stack, ya que disfruto tanto del desarrollo en el backend como en el frontend. Esta versatilidad me permite abordar proyectos de manera integral y ofrecer soluciones completas.</p><br>

			<table style="width: 100%;">
				<tr>
					<td style="width: 50%;" id="curriculum"><a class="tableLink" href="https://es.linkedin.com/in/sheila-miguel-gadea-9521a2193" target="_blank">Linkedin</a></td>
					<td style="width: 50%;"><a class="tableGit" href="https://github.com/sheilaMiguel/" target="_blank">GitHub</a></td>
				</tr>
			</table ><br><br>

		</div>

		<!--CV-->

		<div class="cv">
			<h2 class="textoCV"><a href="pdf/CVSheila2024.pdf" target="_blank" class="linkCv"  id="misTrabajos"> Descarga mi Curriculum </a></h2>
		</div>

		<!--PROYECTOS-->
		<div class="proyectos">


			<div class="tituloProyectos">
				<p class="titleh2" style="font-size: 24px;">PROYECTOS</p>
			</div>

			<a href="https://smiguel.segundodaw.com/ExamenRickyMorty/" class="enlaceTrabajos" target="_blank">
				<div class="p4">
					<p class="NombreProyecto center"><strong>–Api Ricky Morty–</strong><br> <br>Api <br> Bootstrap <br> Php <br> Dompdf <br> Paginación</p>
				</div>
			</a>

			<a href="https://gesbad.com" class="enlaceTrabajos" target="_blank">
				<div class="p3">
					<p class="NombreProyecto center"><strong>–Gesbad–</strong><br>
					<!-- <span class="fontstyle">crea e inscríbete a torneos de bádminton</span> -->
					<br>Symfony<br> Bases de Datos (DQL) <br> Bootstrap</p>
				</div>
			</a>

			<a href="https://smiguel.segundodaw.com/JS/7yMedia/index.html" class="enlaceTrabajos" target="_blank">
				<div class="p6">
					<p class="NombreProyecto center"><strong>–Project 7:30–</strong><br><br> Javascript </p>
				</div>
			</a>

			<a href="https://smiguel.segundodaw.com/JS/CestaCompra/index.html" class="enlaceTrabajos" target="_blank">
				<div class="p2">
					<p class="NombreProyecto center"><strong>–Tienda JS–</strong><br><br> Javascript <br> CSS </p>
				</div>
			</a>

			<!--P1-->
			<a href="https://smiguel.segundodaw.com/CSS/Bento/base.html" class="enlaceTrabajos" target="_blank">
				<div class="p1">
					<p class="NombreProyecto"><strong>– Bento –</strong><br><br>HTML5 <br> Flexbox <br> CSS Grid </p>
				</div>
			</a>


			<a href="https://smiguel.segundodaw.com/APIS/APILosSimpson/" class="enlaceTrabajos" target="_blank">
				<div class="p5" >
					<p class="NombreProyecto center"><strong>–Api Los Simpson–</strong><br><br> Api <br> Bootstrap <br> PHP <br> Dompdf <br> Paginación</p><span id="lenguajes"></span>
				</div>
				
			</a>
		</div>


		<!--CONOCIMIENTOS SKILLS LENGUAJES-->
	<!--CONOCIMIENTOS SKILLS LENGUAJES-->
<div class="conocimiento" >
    <h2 class="tituloConocimiento">CONOCIMIENTOS EN </h2><br>

    <div class="habilidades-contenedor">
        <div class="habilidades-columna">
            <!--html-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaHTML">
                    <span class="barra-habilidades-etiqueta">HTML5</span>
                </div>
                <span class="barra-habilidades-porcentaje">95%</span>
            </div><br>
            <!--css-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaCSS">
                    <span class="barra-habilidades-etiqueta">CSS + GRID + FLEXBOX </span>
                </div>
                <span class="barra-habilidades-porcentaje">95%</span>
            </div><br>
            <!--BOOTSTRAP-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaBOOTSTRAP">
                    <span class="barra-habilidades-etiqueta">BOOTSTRAP</span>
                </div>
                <span class="barra-habilidades-porcentaje">98%</span>
            </div><br>
            <!--js-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaJS">
                    <span class="barra-habilidades-etiqueta">JAVASCRIPT</span>
                </div>
                <span class="barra-habilidades-porcentaje">90%</span>
            </div><br>
            <!--php-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaPHP">
                    <span class="barra-habilidades-etiqueta">PHP</span>
                </div>
                <span class="barra-habilidades-porcentaje">90%</span>
            </div><br>
            <!--Symfony-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaSYMFONY">
                    <span class="barra-habilidades-etiqueta">SYMFONY</span>
                </div>
                <span class="barra-habilidades-porcentaje">85%</span>
            </div><br> 
		</div>
		<div class="habilidades-columna">
            <!--JAVA-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaJAVA">
                    <span class="barra-habilidades-etiqueta">JAVA</span>
                </div>
                <span class="barra-habilidades-porcentaje">80%</span>
            </div><br>
            <!--R-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaR">
                    <span class="barra-habilidades-etiqueta">R</span>
                </div>
                <span class="barra-habilidades-porcentaje">70%</span>
            </div><br>
            <!--MYSQL-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaMYSQL">
                    <span class="barra-habilidades-etiqueta">MYSQL</span>
                </div>
                <span class="barra-habilidades-porcentaje">85%</span>
            </div><br>
            <!--WORDPRESS-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaWORDPRESS">
                    <span class="barra-habilidades-etiqueta">WORDPRESS</span>
                </div>
                <span class="barra-habilidades-porcentaje">85%</span>
            </div><br>
            <!--PYTHON-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaPYTHON">
                    <span class="barra-habilidades-etiqueta">PYTHON</span>
                </div>
                <span class="barra-habilidades-porcentaje">75%</span>
            </div><br>
            <!--NODEJS-->
            <div class="barra-habilidades">
                <div class="barra-habilidadesMorada porcenCambiaNODEJS">
                    <span class="barra-habilidades-etiqueta">NODE (En proceso de aprendizaje) </span>
                </div>
                <span class="barra-habilidades-porcentaje">60%</span>
            </div><br>
        </div>				
        </div>


			<h2 class="tituloContacto titleh2" id="contacto"></h2><br><br>
		</div>


		<div class="contacto" >
    <form action="enviar.php" method="POST" id="formulario">
        <fieldset class="Contactoformulario">
            <legend id="formu">
                <h2>¿Quieres contactar conmigo?</h2>
            </legend>

            <label for="nombre">Nombre y apellidos</label>
            <input type="text" id="nombre" placeholder="Nombre" name="nombre" required />

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" name="email" required />

            <label for="observaciones">Mensaje</label>
            <textarea id="observaciones" rows="5" cols="22" name="observaciones" placeholder="Escribe tu mensaje aquí..." required></textarea>

            <input type="submit" id="submit" value="Enviar" />
        </fieldset>
        <?php
        if (isset($_GET["mensaje"])) {
            if ($_GET["mensaje"] == "ok") {
                echo "<p class='mensaje ok'>Tu Mensaje se ha Enviado Correctamente :)</p>";
            } else {
                echo "<p class='mensaje error'>Ocurrió un Error al Enviar tu Mensaje :(</p>";
            }
        }
        ?>
    </form>
</div></div>

	<!--FOOTER-->
	<!--FOOTER-->
	<footer class="footer">
	

			<!--logo pie-->
			<div id="logoPiePag">
				<a href="#cabecera"> <img class="imgLogo" src="img/smgRemove.png" alt="Sheila" align="center" />
				</a>
			</div>

			<!--enlaces ancla-->
			<div id="EnlacesBotonera">
				<span id="textoPiePag">
					<span><a href="#sobreMi" class="link"> Sobre mí </a> </span>·<span><a href="#curriculum" class="link"> Curriculum </a></span>·<span><a href="#misTrabajos" class="link"> Proyectos </a></span>·<span><a href="#lenguajes" class="link"> Lenguajes </a></span>·<span> <a href="#contacto" class="link">Contacto </a></span>
				</span>
			</div>

			<!--copyright-->
			<div id="copyright">
				<span>
					copyright 2023

				</span>
			</div>
		
	</footer>



</body>

</html>