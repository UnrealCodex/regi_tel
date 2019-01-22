<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<div align="center">
	<h1>Modificar Registros</h1><br>
		<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>

	<table width="70%" border="1">
  <tbody>
    <tr align="center">
      <td>Folio</td>
      <td>Fecha</td>
      <td>No Empleado</td>
      <td>Nombre</td>
	  <td>Respuesta</td>
      <td>Info</td>
    </tr>
	<?php
	
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro GROUP BY int_fol DESC ORDER BY fecha_reg DESC");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
//	echo '<div> <a style="font-size: 18px" href="';
//	echo 'http://www.fovileon.com/regi_tel/modi.php?int_fol=';
//	echo $rowAccount2['int_fol'].'"';
//	echo '>'.$rowAccount2['int_fol'].'-Fecha:'.$rowAccount2['fecha_reg'].'-'.$rowAccount2['no_emp'].'-'.$rowAccount2['nom_usr'].'</a><br></div>';
	
	echo '<tr align="center">
      <td>'.$rowAccount2['int_fol'].'</td>
      <td>'.$rowAccount2['fecha_reg'].'</td>
      <td>'.$rowAccount2['no_emp'].'</td>
      <td>'.$rowAccount2['nom_usr'].'</td>
	  <td>'.$rowAccount2['respuesta'].'</td>
      <td><a style="font-size: 18px" href="http://www.emrgtechs.com/regi_tel/modi.php?int_fol='.$rowAccount2['int_fol'].'">Modificar</a></td>
    </tr>';
	
	
	
	
}
	?>
	  
  </tbody>
</table>	  
	<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Menu</a><br><br>  
	</div>
</body>
</html>