var imagen = document.getElementById("imagen");
var saludo = document.getElementById("saludo");
var nombre = document.getElementById("nombre");

function saludar(tipo, rutaImagen){
	let sal = "HOLA MUNDO " + tipo;
	
	if(nombre.value != null && nombre.value.length > 0){
		sal += " Y HOLA "+nombre.value;
	}
	
	imagen.src = rutaImagen;
	saludo.innerHTML = sal;	
}

function saludarHTML(){
	saludar("HTML", "resources/html.jpeg");
}

function saludarJS(){
	saludar("JS", "resources/js.png");
}

function saludarPHP(){
	saludar("PHP", "resources/php.png");
}

function saludarCSS(){
	saludar("CSS", "resources/css.jpeg");
}
