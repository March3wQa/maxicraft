<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>MAXICRAFT | Strona główna</title>
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
				<li id="nav-ul-li"><a href="ekipa.php" id="nav-ul-li-a">Ekipa <img src="./images/misc/minecraft_steve_head.jpg" width=20px height=20px /></a></li>
			</ul>
		</nav>
		<div class="quarter-white">
			<?php
	define( 'MQ_SERVER_ADDR', 'localhost' ) ; // adres IP Twojego Serwera
	define( 'MQ_SERVER_PORT', 9123 ); // Port rcon który ustawiłeś/aś w pliku serwer.properties
	define( 'MQ_SERVER_PASS', 'maxicraft_password' ); // hasło które ustawiłeś/aś w pliku serwer.properties
	define( 'MQ_TIMEOUT', 2 );
	
	require __DIR__ . './php/MinecraftRcon.class.php'; // tutaj ścieżka do wcześniej zdefioniowanego  //pliku dla połączenia się z rcon
    
    $nick=$_POST['gracz'];
	
	echo "<pre>";
	
	try {
		$Rcon = new MinecraftRcon;
		
		$Rcon->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_SERVER_PASS, MQ_TIMEOUT );
		
		$Data = $Rcon->Command( "say test" ); // Przykładowa komenda która da użytkownikowi rangę VIP na 7 dni .
		
		if( $Data === false )
		{
			throw new MinecraftRconException( "Failed to get command result." );
		}
		else if( StrLen( $Data ) == 0 )
		{
			throw new MinecraftRconException( "Got command result, but it's empty." );
		}
		
		echo HTMLSpecialChars( $Data );
	}
	catch( MinecraftRconException $e )
	{
		echo $e->getMessage( );
	}
	
	$Rcon->Disconnect( );

$urlthx="http://www.example.com/";  //  Strona na którą gracz zostanie przeniesiony np. o dokonaniu zakupu VIP-a
header("Location: " . $urlthx);
?>
		</div>
	</body>
</html>