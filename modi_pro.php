<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Cambiado con Exito</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<?php
require_once  'conexion.php'; //conexion a la BD
	$int_fol = $_POST['int_fol'];
	$reg_by = $_POST['reg_by'];
	$fecha_reg = strtotime($_POST['fecha_reg']);
	$fecha_reg = date('Y-m-d',$fecha_reg);
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
	
	
	mysqli_query($link ,"UPDATE `registro` SET 
	
	reg_by='$reg_by',
	fecha_reg='$fecha_reg',
nom_usr='$nom_usr',
no_emp='$no_emp',
num_tel='$num_tel',
esc='$esc',
region='$region',
asunto='$asunto',
muni='$muni',
refe='$refe',
fide='$fide',
cono='$cono'

WHERE `registro`.`int_fol`='$int_fol'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);
	
?>
	
	<div align="center"><br>

	<h1>REGISTRO MODIFICADO</h1><br>
<br>

		<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>
	</div>
	
</body>
</html>