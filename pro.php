<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Exitoso</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	
	
	<?php

require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	
	
	$reg_by = $_POST['reg_by'];
	$page_stat = "1_5";	
	$fecha_reg = $_POST['fecha_reg'];
	$nom_usr = $_POST['nom_usr'];
	$no_emp = $_POST['no_emp'];
	$num_tel = $_POST['num_tel'];
	$esc = $_POST['esc'];
	$region = $_POST['region'];
	$asunto = $_POST['asunto'];
	$muni = $_POST['muni'];
	$refe = $_POST['refe'];
	$fide = $_POST['fide'];
	$cono = $_POST['cono'];
	date_default_timezone_set('America/Mexico_City');
    $hora = date("h:i a");

	
	
	
	mysqli_select_db($link,"reg_tel"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_query($link , "insert into registro (
reg_by,
hora,
fecha_reg,
nom_usr,
no_emp,
num_tel,
esc,
region,
asunto,
muni,
refe,
fide,
cono
) values (
'".$reg_by."',
'".$hora."',
'".$fecha_reg."',
'".$nom_usr."',
'".$no_emp."',
'".$num_tel."',
'".$esc."',
'".$region."',
'".$asunto."',
'".$muni."',
'".$refe."',
'".$fide."',
'".$cono."'
)") ;/*MUESTRA UN MENSAJE DE ERROR EN CASO DE QUE ALGO VALLA MAL*/ 

	
mysqli_close($link);

	
	
	
	
	?>
	<div align="center">
	<br>
<br>

	<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>
	</div>
</body>
</html>