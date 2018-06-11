<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Imprimir</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<div align="center">
		<h1>VER REGISTROS TELEFONICOS</h1><br>
	<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>
<br>
Fechas con Registros<br>


	<?php
	
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro GROUP BY fecha_reg DESC");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo '<div> <a style="font-size: 18px" href="';
	echo 'http://www.fovileon.com/regi_tel/regxdia.php?fecha_reg=';
	echo $rowAccount2['fecha_reg'].'"';
	echo '>'.$rowAccount2['fecha_reg'].'<br></a></div>';
}
	?>
		
		<br>
<br>
<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>
		
	</div>
</body>
</html>
