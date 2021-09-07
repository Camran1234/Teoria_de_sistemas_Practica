<!DOCTYPE html>
<html>
	<head>
		<title>Hola mundo</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>	
	<body class="color-fondo">
	<div class="center">
    		<div class="center">
		<h1 class="color-violeta" id="saludo" name="Saludo">HOLA MUNDO HTML</h1>
		
		<input type="text" placeholder="Ingresa un nombre" id="nombre" name="nombre">
		<button class="button" type="button" onclick ="saludarHTML()">
			SALUDAR HTML
		</button>
		<button class="button" type="button" onclick ="saludarCSS()">
			SALUDAR CSS
		</button>
		<button class="button" type="button" onclick ="saludarJS()">
			SALUDAR JS
		</button>
		<button class="button" type="button" onclick ="saludarPHP()">
			SALUDAR PHP
		</button>
		<form action="final.php" method="post">
			<input placeholder="Ingrese un texto" class="input" type="text" required name="valor">
			<input type="reset" class="boton" value="REINICIAR">
			<input type="submit" class="boton" value="ENVIAR TEXTO">
		</form>
		
		<br>
		<img src=""  class="image" name="imagen" id="imagen">
			
		</div>
	</div>		
	<div class="footer">
    		<p> TEORIA DE SISTEMAS </p>
	</div>	
	<script type="text/javascript" src="script.js"></script>
	</body>
	
 
</html>


