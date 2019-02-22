<!doctype html>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
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
		<br>
		<a href="ver_reg_m.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Fechas</a><br><br>
	  <h1><?php 
		  
		  
		  
		  
		  $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 $d = new DateTime( $_REQUEST['fecha_reg'] );
		  
		 //echo $d->format( 'w' );
		  
echo $dias[$d->format('w')]." ".$d->format('d')." de ".$meses[$d->format('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
		  
		  
		  
		  
		  
		  
		  
			
			
			//echo $_REQUEST['fecha_reg'];?></h1>
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
	
	echo 	'<div style="background-color: #CCFD9A ; border-radius: 25px; padding: 30px; width:100%">
	<table width="100%" border="0" >
	<tr>
    <td><strong>Hora de registro:</strong>  '.$rowAccount2[hora].' </td>
  </tr>
  <tr>
    <td><strong>Nombre:</strong>  '.$rowAccount2[nom_usr].' </td>
  </tr>
  <tr>
    <td><strong>No. Emp:</strong>  '.$rowAccount2[no_emp].'</td>
    </tr>
  <tr>
    <td><strong>Fideicomiso:</strong>  '.$rowAccount2[fide].'</td>
    </tr>
  <tr>
    <td><strong>Tel:</strong> '.$rowAccount2[num_tel].'</td>
    </tr>
  <tr>
    <td><strong>Escuela:</strong>'.$rowAccount2[esc].'</td>
    </tr>
  <tr>
    <td><strong>Mun:</strong> '.$rowAccount2[muni].' <strong>Reg:</strong> '.$rowAccount2[region].'</td>
    </tr>
  <tr>
    <td><strong>Conocido:</strong> '.$rowAccount2[cono].' </td>
    </tr>
  <tr>
    <td><strong>Referencia:</strong></td>
    </tr>
  <tr>
    <td>-'.$rowAccount2[refe].'</td>
  </tr>
  <tr>
    <td><strong>Asunto</strong></td>
    </tr>
  <tr>
    <td>'.$rowAccount2[asunto].'</td>
  </tr>
  <tr>
    <td><strong>Respuesta</strong></td>
    </tr>
   <tr>
    <td>'.$rowAccount2[respuesta].'</td>
    </tr>
  <tr>
    <td><a style="color:red;font-size:18px" href="regxdia_indi.php?int_fol='.$rowAccount2[int_fol].'">Responder/Cambiar</a></td>
    </tr>
</table></div>
<br>
	';
	}
	else
	{
		
		echo '<div style="background-color: #C1F9FF ; border-radius: 25px; padding: 30px; width:100%">
		<table width="100%" border="0">
		<tr>
    <td><strong>Hora de registro:</strong>  '.$rowAccount2[hora].' </td>
  </tr>
  <tr>
    <td><strong>Nombre:</strong>  '.$rowAccount2[nom_usr].' </td>
      </tr>
  <tr>
    <td><strong>No. Emp:</strong>  '.$rowAccount2[no_emp].'</td>
    </tr>
  <tr>
    <td><strong>Fideicomiso:</strong>  '.$rowAccount2[fide].' <strong></strong></td>
    </tr>
  <tr>
    <td><strong>Tel:</strong> '.$rowAccount2[num_tel].'</td>
    </tr>
  <tr>
    <td><strong>Dependencia:</strong>'.$rowAccount2[esc].'</td>
    </tr>
  <tr>
    <td>'.$rowAccount2[muni].' <strong></strong> '.$rowAccount2[region].'</td>
    </tr>
  <tr>
    <td><strong>Conocido:</strong> '.$rowAccount2[cono].' </td>
    </tr>
  <tr>
    <td><strong>Referencia:</strong></td>
    </tr>
  <tr>
    <td>-'.$rowAccount2[refe].'</td>
    </tr>
  <tr>
    <td><strong>Asunto:</strong></td>
    </tr>
  <tr>
    <td>'.$rowAccount2[asunto].'</td>
    </tr>
	 <tr>
    <td><strong>Respuesta</strong></td>
    </tr>
	 <tr>
    <td>'.$rowAccount2[respuesta].'</td>
    </tr>
	 <tr>
    <td><a style="color:red;font-size:18px" href="regxdia_indi.php?int_fol='.$rowAccount2[int_fol].'">Responder/Cambiar</a></td>
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
<a href="ver_reg_m.php" class="btn btn-primary "  style="font-size: 22px">Regresar a Fechas</a><br><br>
		
</div>
</body>
</html>
