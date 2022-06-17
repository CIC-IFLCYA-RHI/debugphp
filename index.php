<?php
if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$promedio = ($nota1 + $nota2 + $nota3) / 3;
	echo "<p>{$nombre}, tu promedio es: {$promedio}</p>";
}
PRINT
<!DOCTYPE HTML>
<HTML lang="es">
<head><meta charset="UTF-8">
<title>FORMULARIO</title>
<link rel="stylesheet" href="estilos.css"></head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"
		method="post">
		<h1>PROMEDIOS</h1>
		<label for="">Nombre: </label>
		<input type="text" name="nombre">
		<label for="">Nota 1: </label>
		<input type="text" name="nota1">
		<label for="">Nota 2: </label>
		<input type="text" name="nota2">
		<label for="">Nota 3: </label>
		<input type="text" name="nota3">
		<input type="submit" value="Calcular" name="enviar">
	</form>
</body>

</HTML>
HERE
?>
