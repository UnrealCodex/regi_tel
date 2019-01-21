<!doctype html>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Imprimir</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<div align="center">
		<h1>VER REGISTROS TELEFONICOS</h1><br>
	

Fechas con Registros<br>


	<?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro GROUP BY fecha_reg DESC LIMIT 7");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	
 $d = new DateTime( $rowAccount2['fecha_reg'] );
	echo '<div> <a style="font-size: 18px" href="';
	echo 'http://www.emrgtechs.com/regi_tel/regxdia_m.php?fecha_reg=';
	echo $rowAccount2['fecha_reg'].'">';
	echo $dias[$d->format('w')]." ".$d->format('d')." de ".$meses[$d->format('n')-1]. " del ".date('Y') ;
	echo '<br><br></a></div>';
}
	?>
		
		<br>
<br>

		
	</div>
</body>
</html>
