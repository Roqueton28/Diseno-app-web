<html>
<head>
<title>Estudiantes</title>

</head>

<body>

<p>Arreglo datos de estudiantes</p>

<?php

$estudiante = array(
				"< nombre >" => array(1=>"Juan Perez","Maria Díaz","Carlos Suero"),
				"< edad >" => array(1=>15, 14, 16),
				"< calificación >" => array(1=>80,92,88)
					);
					print_r($estudiante);
?>

</body>

</html>