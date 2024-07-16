<html>
    <head>
		<meta charset="UTF-8">
        <title>Football Live | Futbol en vivo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
		<div id="mask"><div class="preloader"></div></div>
		<div id="hmatches" class="revenue-head">
			<img src="img/arrow-left.png" class="arrow-left"/>
			<h3 id="fecha"></h3>
			<img src="img/arrow-right.png" class="arrow-right"/>
		</div>
		<div id="hleagues" class="revenue-head invisible">
			<h3 id="title_leagues">Principales Ligas y Competencias</h3>
		</div>
		<div id="hnews" class="revenue-head invisible">
			<h3 id="title_news">Últimas Noticias</h3>
		</div>
		<div id="htransfer" class="revenue-head invisible">
			<h3 id="title_transfer">Últimos Fichajes</h3>
		</div>
		<div id="habout" class="revenue-head invisible">
			<h3 id="title_about">Acerca de Football Live</h3>
		</div>		
		<div class="body-wrapper">
			<div id="wmatches" class="wrapper">
				<div class="scrollableContainer"></div>
			</div>
			<div id="wleagues" class="wrapper invisible">				
				<div class="leaguesContainer"></div>
			</div>
			<div id="wnews" class="wrapper invisible">				
				<div class="newsContainer"></div>
			</div>
			<div id="wtransfer" class="wrapper invisible">
				<div class="transferContainer"></div>
			</div>
			<div id="wabout" class="wrapper invisible">				
				<div class="aboutContainer">
					<section id="description">
						<h2 id="welcome">¡Bienvenido amigo!</h2>
						<p id="title_description">Football Live es una extensión de Chrome que te permite estar al tanto de los últimos resultados de tus ligas favoritas. Con una interfaz intuitiva y fácil de usar, puedes mantenerte al día y seguir cada momento del deporte que amamos.</p>
					</section>
					<section id="features">
						<h2 id="feature">Características</h2>
						<ul>
							<li><b id="result">Resultados en tiempo real:</b> <span id="sp_result">Obtén actualizaciones instantáneas sobre los marcadores de los partidos mientras ocurren.</span></li>
							<li><b id="customize">Personalización:</b> <span id="sp_customize">Selecciona tus ligas favoritas y mantente informado sobre sus partidos en vivo.</span></li>
							<li><b id="interface">Interfaz intuitiva:</b> <span id="sp_interface">Navega fácilmente por la extensión y encuentra lo que necesitas en segundos.</span></li>
						</ul>
					</section>
					<section id="team">
						<h2 id="title_team">Equipo</h2>
						<p><b id="developer">Desarrollador:</b> Yoenry Vanega Hechavarría</p>
						<p><b id="contact">Contacto:</b> yvanega@gmail.com</p>
					</section>
					<section id="versions">
						<p><b id="version">Versión actual:</b> 2.1.2</p>
						<p><b id="date">Fecha de lanzamiento:</b> 04-04-2024</p>
					</section>
				</div>
			</div>
		</div>
		<footer>
            <div class="options">
				<div id="matches" class="matches opt_5">
					<img id="stadium" src="img/stadium.png"/>
					<p id="op_matches" class="title">Partidos</p>
				</div>
				<div id="leagues" class="leagues opt_5 disable">
					<img id="img_cup" src="img/cup_disable.png"/>
					<p id="op_leagues" class="title">Ligas</p>
				</div>
				<div id="news" class="news opt_5 disable">
					<img id="img_news" src="img/news_disable.png"/>
					<p id="op_news" class="title">Noticias</p>
				</div>
				<div id="transfer" class="transfer opt_5 disable">
					<img id="img_transfer" src="img/transfer_disable.png"/>
					<p id="op_transfer" class="title">Fichajes</p>
				</div>
				<div id="about" class="about opt_5 disable">
					<img id="img_about" src="img/about_disable.png"/>
					<p id="op_about" class="title">Acerca de</p>
				</div>
			</div>
        </footer>
        <script type="text/javascript" src="js/background.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>