<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MAXICRAFT | Ekipa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/main.css">
		<link rel="icon" href="./images/favicons/icon_main.png">
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Bungee|Comfortaa|Monoton|Righteous" rel="stylesheet">
	</head>
	<body>
		<header>
			Witaj na stronie serwera
				<span id="header_main">
					MAXICRAFT
				</span>
			!
		</header>
		<nav id="nav">
			<ul id="nav-ul">
				<li id="nav-ul-li"><a href="index.html" id="nav-ul-li-a">Strona główna <img src="./images/misc/minecraft_grass.png" width=20px height=20px /></a></li>
				<li id="nav-ul-li"><a href="mapa-serwera.html" id="nav-ul-li-a">Mapa serwera <img src="./images/misc/minecraft_map.png" width=20px height=20px /></a></li>
				<li id="nav-ul-li"><a href="sklep.html" id="nav-ul-li-a">Sklep <img src="./images/misc/minecraft_gold_bar.png" width=20px height=20px /></a></li>
				<li id="nav-ul-li"><a href="kontakt.html" id="nav-ul-li-a">Kontakt <img src="./images/misc/minecraft_book_and_quill.png" width=20px height=20px /></a></li>
				<li id="nav-ul-li"><a href="ekipa.html" id="nav-ul-li-a">Ekipa <img src="./images/misc/minecraft_steve_head.jpg" width=20px height=20px /></a></li>
			</ul>
		</nav>
		<?php
			include '/php/ekipa-sql.php';
		?>
	</body>
</html>