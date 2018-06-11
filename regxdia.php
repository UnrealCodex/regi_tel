<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Imprimir</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<style>
	#rcorners1 {
    
}
	</style>
</head>

<body>
	<div align="center">
		<h1>REGISTROS POR DIA</h1><br>
	<a href="ver_reg.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Fechas</a><br><br>
<br>
<br>

 
	<?php
	
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro where fecha_reg = '$_REQUEST[fecha_reg]'");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	if($rowAccount2['fide'] == 'EDUCACION')
	{
	
	echo 	'<div style="background-color: #CCFD9A ; border-radius: 25px; padding: 30px; width:700px">
	<table width="700px" border="0" >
  <tr>
    <td colspan="2"><strong>Nombre:</strong>  '.$rowAccount2[nom_usr].' </td>
  </tr>
  <tr>
    <td><strong>No. Emp:</strong>  '.$rowAccount2[no_emp].'</td>
    <td><strong>Escuela:</strong>'.$rowAccount2[esc].'</td>
  </tr>
  <tr>
    <td><strong>Fideicomiso:</strong>  '.$rowAccount2[fide].'</td>
    <td><strong>Mun:</strong>  '.$rowAccount2[muni].'  <strong>Reg:</strong>  '.$rowAccount2[region].'</td>
  </tr>
  <tr>
    <td><strong>Tel:</strong> '.$rowAccount2[num_tel].'</td>
    <td><strong>Conocido:</strong> '.$rowAccount2[cono].' </td>
  </tr>
  <tr>
    <td><strong>Referencia:</strong></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">-'.$rowAccount2[refe].'</td>
  </tr>
  <tr>
    <td><strong>Asunto</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">'.$rowAccount2[asunto].'</td>
  </tr>
</table></div>
<br>
	';
	}
	else
	{
		
		echo '<div style="background-color: #C1F9FF ; border-radius: 25px; padding: 30px; width:700px">
		<table width="700px" border="0">
  <tr>
    <td colspan="2"><strong>Nombre:</strong>  '.$rowAccount2[nom_usr].' </td>
      </tr>
  <tr>
    <td><strong>No. Emp:</strong>  '.$rowAccount2[no_emp].'</td>
    <td><strong>Dependencia:</strong>'.$rowAccount2[esc].'</td>
    </tr>
  <tr>
    <td><strong>Fideicomiso:</strong>  '.$rowAccount2[fide].' </td>
    <td><strong></strong>  '.$rowAccount2[muni].'  <strong></strong>  '.$rowAccount2[region].'</td>
  </tr>
  <tr>
    <td><strong>Tel:</strong> '.$rowAccount2[num_tel].'</td>
    <td><strong>Conocido:</strong> '.$rowAccount2[cono].' </td>
  </tr>
  <tr>
    <td><strong>Referencia:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">-'.$rowAccount2[refe].'</td>
    </tr>
  <tr>
    <td><strong>Asunto:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">'.$rowAccount2[asunto].'</td>
    </tr>
</table>
</div>
<br>'
	;
	
	}
	
}
	?>
		
		<br>
<br>
<a href="ver_reg.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Fechas</a><br><br>
		
	</div>
</body>
</html>
