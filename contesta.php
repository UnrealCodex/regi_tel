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
		<h1>REGISTRO</h1><br>
	;	
<?php
require_once  'conexion.php'; //conexion a la BD
//	$reg_by = $_REQUEST['reg_by'];
//	$page_stat = $_REQUEST['page_stat'];	
	$int_fol = $_POST['int_fol'];
	$respuesta = $_POST['respuesta'];
		
		mysqli_select_db($link,"reg_tel");
		mysqli_query($link ,"UPDATE `abecode_teldb`.`registro` SET `respuesta` = '$respuesta' WHERE `registro`.`int_fol` ='$int_fol'");	
	
		
	?>	
		
		
	<br><br>
	  <h1><?php 
		  
		  
		  
		  
		  $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 $d = new DateTime( $_REQUEST['fecha_reg'] );
		  
		 //echo $d->format( 'w' );
		  
echo $dias[$d->format('w')]." ".$d->format('d')." de ".$meses[$d->format('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
		  
		  
		  
		  
		  
		  
		  
			
			
			//echo $_REQUEST['fecha_reg'];?></h1>
<br>
<br>

 
	<?php
	
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro where int_fol = '$_REQUEST[int_fol]'");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo ('<form action="contesta.php" method="post">');
	echo ('<input type="hidden" name="int_fol" value="').$rowAccount2[int_fol].('">');
	if($rowAccount2['fide'] == 'EDUCACION')
	{
	
	echo 	'<div style="background-color: #CCFD9A ; border-radius: 25px; padding: 30px; width:100%">
	<table width="100%" border="0" >
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
    <td><strong>Responder:</strong></td>
    </tr>
	<tr>
	<td>
	<textarea name="respuesta" style=" width:100%;" disabled>'.$rowAccount2[respuesta].'</textarea>  
	</td>
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
    <td><strong>Responder:</strong></td>
    </tr>
	<tr>
	<td>
	<textarea name="respuesta" style=" width:100%;" disabled>'.$rowAccount2[respuesta].'</textarea> 
	</td>
	</tr>
</table>
</div>
<br>'
	;
	}

	?>
		
		<br>
<br>
		<br><br>
		</form>
<a href="http://www.emrgtechs.com/regi_tel/regxdia_m.php?fecha_reg=<?php echo $rowAccount2[fecha_reg] ; 	
	
}?>" class="btn btn-primary "  style="font-size: 22px">Regresar </a><br><br>
		
	</div>
</body>
</html>
