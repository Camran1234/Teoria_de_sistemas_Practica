<!DOCTYPE html>
<html>
	<head>
		<title>RECIBIDO</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>
	<body class="color-fondo">
	<div class="center">
    		<div class="center">
			<h1>TEXTO RECIBIDO EN PHP: </h1>
			<?php 
				echo("<h1>". $_POST ["valor"] . "</h1>"); 				
			?>
		</div>
		<a href="index.php" style="color: white">Regresar</a>
	</div>		
	</body>
	
</html>



