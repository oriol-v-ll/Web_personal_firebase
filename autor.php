<!-- Documento PHP principal de la web www.oriolvillanova.com


@autor: Oriol Villanova LLorens
@email: oriol.villanova@estudiants.urv.cat

autor.php v1.4
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
	
		//Implementación del onclick de la imagen.
		
		
	
	</script>
<body>
	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyC3ksLYxhnA2vjjehkJnt2lzHNJ8-arsTY",
    authDomain: "oriolvillanova-ff086.firebaseapp.com",
    databaseURL: "https://oriolvillanova-ff086.firebaseio.com",
    projectId: "oriolvillanova-ff086",
    storageBucket: "oriolvillanova-ff086.appspot.com",
    messagingSenderId: "552433996785",
    appId: "1:552433996785:web:bad81ac7cb64dcb112ea50",
    measurementId: "G-R908N0D4EL"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
	
	<!--######-MENU-######-->
	
	<div id='cssmenu'>
		<ul>
			<li class='profile'>
			
			
			</li>
			<li class="Logo" ><a href='index.php'><img id="LogoImage" src="Imagenes/logo.png"></img></a></li>
			<li class="Logo" ><div id="espaciador" ></div></li>
			<li><a class='menu' href='index.php'><span>Inici</span></a></li>
			<li class='active'><a class='menu' href='autor.php'><span>Currículum</span></a></li>
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
			<section>
				<header>
					<h2>Oriol Villanova Llorens.</h2>
				</header>
					<br>
					email: oriol.villanova@estudiants.urv.cat <br>
						   contacto@oriolvillanova.com

			</section>
			
		</li>
		<li>
			<section>
				<header>
					<h2> Experiència Professional </h2>
				</header>
					<ol>
						<li>
							Del 10-7-2017 fins 31-8-2017.Peó en Carbonell Figueras.
						</li>
						<li>
							Del 1-7-2018 hasta 31-8-2018. Ajudant d'albanyil en Carbonell Figueras.
						</li>
						<li>
							Del 9-7-2019 hasta 31-9-2019. Oficial de 3a en el departament de Telecomunicaciones de IYMESA.
						</li>
					</ol>
			</section>
		</li>
		<li>
			<section>
				<header>
					<h2> Formació acadèmica </h2>
				</header>

			<ol>
				<li>
					Bachillerat en LaSalleTarragona
				</li>
				<li>
					Cursant actualment el Grau en Enginyeria de sistemes y serveis de Telecomunicacions en la URV. 
				</li>
			</ol>
			</section>
		</li>
		<li>
			<section>
				<header>
					<h2>Formació complementaria</h2>
				</header>
				<ol>
					<li>
						TPC 6h en prevenció de riscos laborals en la construcció en electricitat.
					</li>
					<li>
						Segon cicle de formació 20h.
					</li>
				</ol>
			</section>
		</li>
		<li>
			<section>
				<header>
					<h2>
						Informática/Idiomes/Altres dades
					</h2>
				</header>

				<ol>
					<li>
						Sistemes operatius i sistemes informátics domini alt.
					</li>
					<li>
						B2 (First certificate of english) acreditat.
					</li>
					<li>
						Permís de conduir y vehicle propi.
					</li>
				</ol>
			</section>
		</li>
		

	</ul>
	</td>
	<td id="right">
				
				
			</td>
	</tr>
	</tbody>
	</table>
	
	
	
<footer>
		<p>Oriol Villanova Llorens | www.oriolvillanova.com &copy; </p>
</footer>
	
	
	
	
</body>
</html>