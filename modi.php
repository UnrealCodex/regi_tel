<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	
	<style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea,
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; 
}
.form-style-1 input[type=text]:focus,
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus,
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>
	
	
	
	
	
</head>

<body>
		<?php
	
	require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM registro WHERE int_fol = '$_REQUEST[int_fol]' GROUP BY int_fol DESC");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	?>
	<ul class="form-style-1">
	
	<div align="left">
		<div>
<form action="modi_pro.php" method="post">
		<input type="hidden" value="Yolanda" name="reg_by">
	<input type="hidden" value="<?php echo $_REQUEST['int_fol']; ?>" name="int_fol">
	<li><label>Fecha Registro: <span class="required">*</span></label><input type="date" name="old_fecha_reg" value="<?php echo $rowAccount2['fecha_reg']; ?>" disabled><br></li>
	Cambiar Fecha <input type="text" name="fecha_reg" value="<?php echo $rowAccount2['fecha_reg']; ?>"><br>

	
	Nombre de quien Llamo:<br>
		<input name="nom_usr" type="text" size="100" value="<?php echo $rowAccount2['nom_usr']; ?>"><br>
	Numero de Empleado:<br>
		<input type="text" name="no_emp" value="<?php echo $rowAccount2['no_emp']; ?>"><br>
	Numero de Telefono:<br>
		<input type="text" name="num_tel" value="<?php echo $rowAccount2['num_tel']; ?>"><br>
	Fideicomiso:<br>
	<select name="fide" id="fide">
		 <option value="<?php echo $rowAccount2['fide']; ?>" selected="selected"><?php echo $rowAccount2['fide']; ?></option>
	  <option value="EDUCACION">EDUCACION</option>
	  <option value="SERV_PUB">SP</option>
	</select><br>

	Escuela o Dependencia:<br>
		<input type="text" name="esc" value="<?php echo $rowAccount2['esc']; ?>"><br>
	Region:<br>
		<input type="text" name="region" value="<?php echo $rowAccount2['region']; ?>"><br>
	Municipio:<br>
		<input type="text" name="muni" value="<?php echo $rowAccount2['muni']; ?>"><br>
	Referencia:<br>
		<textarea name="refe" cols="45" rows="5" ><?php echo $rowAccount2['refe']; ?></textarea><br>
	Asunto:<br>
		<textarea name="asunto" cols="45" rows="5" ><?php echo $rowAccount2['asunto']; ?></textarea><br>
		Conocido:<br>
	
	<select name="cono" id="cono">
	  <option value="<?php echo $rowAccount2['cono']; ?>" selected="selected"><?php echo $rowAccount2['cono']; ?></option>
	  <option value="Si">Si</option>
	  <option value="No">No</option>
	</select>
	
	<br>
			<?php } ?>
<input type="submit" value="Enviar">
	</form>	
		
		</div>
	</div>	
	</ul>
		<div align="center">
	<br>
<br>

	<a href="menu.php" class="btn btn-primary "  style="font-size: 22px">Cancelar</a><br><br>
	</div>

</body>
</html>