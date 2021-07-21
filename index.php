<!-- Document PHP principal de la web www.oriolvillanova.com

@autor: Oriol Villanova LLorens
@email: oriol.villanova@estudiants.urv.cat

index.php v1.12
-->

<!DOCTYPE html>
<meta charset="utf-8">
<html lang='es'>
<head>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="Colors.css">
</head>



	<!--Funciones de javascript.-->

	<script language="JavaScript">
	
				window.onload = function () {
            // Variables
            const IMAGENES = [
                'Imagenes/foto1.jpg',
                'Imagenes/foto2.jpg'
            ];
            const TIEMPO_INTERVALO_MILESIMAS_SEG = 1000;
            let posicionActual = 0;
            let $imagen = document.querySelector('#imagen');
            let $botonPlay = document.querySelector('#play');
            let $botonStop = document.querySelector('#stop');
            let intervalo;

            //Funciones

            /*Funcion que cambia la foto en la siguiente posicion*/
            function pasarFoto() {
                if(posicionActual >= IMAGENES.length - 1) {
                    posicionActual = 0;
                } else {
                    posicionActual++;
                }
                renderizarImagen();
            }

            /*Funcion que cambia la foto en la anterior posicion*/
            function retrocederFoto() {
                if(posicionActual <= 0) {
                    posicionActual = IMAGENES.length - 1;
                } else {
                    posicionActual--;
                }
                renderizarImagen();
            }



            /*Funcion que actualiza la imagen de imagen dependiendo de posicionActual*/
            function renderizarImagen () {
                $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
            }

            /* Activa el autoplay de la imagen*/
            function playIntervalo() {
                intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
               
                $botonPlay.setAttribute('disabled', true);
                $botonStop.removeAttribute('disabled');

            }

            /*Para el autoplay de la imagen*/
            function stopIntervalo() {
                clearInterval(intervalo);
                // Activamos los botones de control
                
                $botonPlay.removeAttribute('disabled');
                $botonStop.setAttribute('disabled', true);
            }

            //Eventos. 
            $botonPlay.addEventListener('click', playIntervalo);
            // Iniciar
            $botonStop.addEventListener('click', stopIntervalo);
            renderizarImagen();
        } 

		
		
	
	</script>
<body>
	<!--######-MENU-######-->
	
	<div id='cssmenu'>
		<ul>
			<li class='profile'>
			
			
			</li>
			<li class="Logo" ><a href='index.php'><img id="LogoImage" src="Imagenes/logo.png"></img> </a></li>
			<li class="Logo" ><div id="espaciador" ></div></li>
			<li class='active'><a class='menu' href='index.php'><span>Inici</span></a></li>
			<li><a class='menu' href='autor.php'><span>Currículum</span></a></li>
			<li><a class='menu' href='mas_sobre_mi.php'><span>Més sobre mi</span></a></li>
			<li class='last'><a class='menu' href='contacto.php'><span>Contacte</span></a></li>
			
			
		   
		</ul>
	</div>
	
	<br><br><br><br><br><br>
	<div id="EspaciadorLogin"></div>
	
	<!--######-####-######-->
	<table id="principal">
	<tbody>
	<tr>
	<td id="left">
	<ul>
		<li>
		<h2>
			Qui sóc?
		</h2>
			<p>
			Em dic Oriol Villanova Llorens, tinc 22 anys, m'agrada molt la tecnolgia i el món de la ciència. Actualment estic estudiant el Grau en enginyeria de sistemes i serveis de telecomunicacions a la universitat Rovira i Virgili de Tarragona.
				<p>
					Quan tinc temps lliure m'agrada fer projectes de tecnolgia, com configurar servidors, programar de diferents maneres i utilitzar tota mena d'eines informatiques i de telecomunicacions.
				</p>
				<p>
					Aquest diseny de la pàgina web esta sent actualitzat per un nou més dinàmic. En un temps proper l'aspecte i/o funcionament d'aquesta es veura afectada per aquest canvi.
				</p>
			</p>
				<br>
			</li>
			<li>
			<h2>
			Projectes
			</h2>
			<p>
			M'agrada treballar en projectes de programació independents, aquesta pàgina web és un exemple d'això i de moment el més gran que he fet personalment. Ja que està hostejada en un servidor personal on tota la configuració de xarxa i de muntatge del sistema ha estat fet a mà. Tambè ha estat tota la pagina web programada a mà sense utilitzar cap tipus de plantilla. El codi està disponible <a href="https://github.com/oriol-v-ll/web_personal.git" target="_blank"> aquí</a>, per a utilitzar-ho per a qualsevol ús. 
				<p>
				Tots els projectes que no tinguin cap informació confidencial els aniré publicant al meu GitHub personal on estaran a la disposició de tothom. <a href="https://github.com/oriol-v-ll" target="_blank"> GitHub personal</a>
				</p>
			</p>
			</li>
	</ul>
	</td>
	<td id="right">
				
		<img id="foto_perf" src="Imagenes/perfil.JPG"  ></img>
    	<div class="carousel">
    	<div id="imagen"></div>
		<div class="controles">
    		<button id="play">Play</button>
    		<button id="stop" disabled>Stop</button>
		</div>
		</div>

	</td>
	</tr>
	</tbody>
	</table>
	
	
<footer>
		<p class="parrafos">Oriol Villanova Llorens | www.oriolvillanova.com &copy; </p>
</footer>
	
</body>
</html>