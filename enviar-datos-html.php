<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
<title>Formularios</title>
<meta name="language" content="es">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<h1>Formulario</h1>

<form action="recibir-datos-html.php" method="get">
<fieldset>
<legend>Opciones Especiales</legend>
	<fieldset>
    	<legend>Datos personales</legend>
		<!-- TEXT -->
        <label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" value="" />
        <label for="apellidos">Apellidos:</label>
		<input type="text" id="apellidos" name="apellidos" value="" />
		<!-- PASSWORD -->
		<input type="hidden" id="passwd" name="passwd" value="123456" />
	</fieldset>
</fieldset>
<input type="submit" value="Enviar" />
<input type="reset" value="Restaurar" />
<a href="estructuras-bucle.php">Bucles</a>
</form>
</body>
</html>