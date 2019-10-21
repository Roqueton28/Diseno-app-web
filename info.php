<html>
<head>
<title>Info</title>

</head>

<body>

<p>Informacion del entorno del servidor</p>

<?php

echo "La URL actual  ==> {$_SERVER["HTTP_HOST"]}<br>";
echo "Nombre del fichero  ==> {$_SERVER['SCRIPT_FILENAME']}<br>";
echo "La direccion IP del servidor  ==> {$_SERVER['SERVER_ADDR']}<br>";		
echo "La direccion IP del cliente ==> {$_SERVER['REMOTE_ADDR']}<br>";
echo "Los datos del Servidor PHP  ==> {$_SERVER['SERVER_SOFTWARE']}<br>";	
echo "<br>";
echo '<a href="redirect.php">Visite la página del ITLA<a/>';


?>

</body>

</html>