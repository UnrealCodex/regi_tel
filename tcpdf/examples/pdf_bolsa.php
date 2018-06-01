<?php
$conexion=mysql_connect("localhost","mmigrant_nuevo_a","789poiQWE,.-") or die("Problemas en la conexion");
mysql_select_db("mmigrant_basedatos",$conexion) or die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("select * from bolsa where idbolsa = $_REQUEST[idbolsa]" , $conexion) or die("Problemas en el select:".mysql_error());

$reg=mysql_fetch_array($registros) ;
$idbolsa=$reg['idbolsa'];
$fec_reg=$reg['fec_reg'];
$tipo_usr=$reg['tipo_usr'];
$esp_usr=$reg['esp_usr'];
$nom_usr=$reg['nom_usr'];
$apep_usr=$reg['apep_usr'];
$apem_usr=$reg['apem_usr'];
$sex_usr=$reg['sex_usr'];
$fecnac_usr=$reg['fecnac_usr'];
$lugnac_usr=$reg['lugnac_usr'];
$est_usr=$reg['est_usr'];
$dir_usr=$reg['dir_usr'];
$tel_usr=$reg['tel_usr'];
$cel_usr=$reg['cel_usr'];
$otronum_usr=$reg['otronum_usr'];
$estciv_usr=$reg['estciv_usr'];
$nompad_usr=$reg['nompad_usr'];
$nommad_usr=$reg['nommad_usr'];
$ben_usr=$reg['ben_usr'];
$parben_usr=$reg['parben_usr'];
$fecben_usr=$reg['fecben_usr'];
$folife_usr=$reg['folife_usr'];
$numpass_usr=$reg['numpass_usr'];
$lexp_usr=$reg['lexp_usr'];
$paispass_usr=$reg['paispass_usr'];
$fpass_usr=$reg['fpass_usr'];
$curp_usr=$reg['curp_usr'];
$nomemp_usr=$reg['nomemp_usr'];
$telemp_usr=$reg['telemp_usr'];
$emailemp_usr=$reg['emailemp_usr'];
$supemp_usr=$reg['supemp_usr'];
$diremp_usr=$reg['diremp_usr'];
$visaant_usr=$reg['visaant_usr'];
$visatip_usr=$reg['visatip_usr'];
$visadon_usr=$reg['visadon_usr'];
$visacua_usr=$reg['visacua_usr'];
$visaneg_usr=$reg['visaneg_usr'];
$visanegcua_usr=$reg['visanegcua_usr'];
$visanegpor_usr=$reg['visanegpor_usr'];


//============================================================+
// File name : example_001.php
// Begin : 2008-03-04
// Last Update : 2010-08-14
//
// Description : Example 001 for TCPDF class
// Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
// Nicola Asuni
// Tecnick.com s.r.l.
// Via Della Pace, 11
// 09044 Quartucciu (CA)
// ITALY
// www.tecnick.com
// info@tecnick.com
//============================================================+

/**
* Creates an example PDF TEST document using TCPDF
* @package com.tecnick.tcpdf
* @abstract TCPDF - Example: Default Header and Footer
* @author Nicola Asuni
* @since 2008-03-04
*/

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Bolsa de Trabajo');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30','Agencia de Colocacion');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print

$html = <<<EOD
<div align="center" style=" line-height:60%"><h3> Bolsa de Trabajo</h3></div>
<div style=" line-height:140%">
<strong>Folio:</strong> <span style="background-color:#F0F0F0">$idbolsa</span> <strong>Fecha: </strong><span style="background-color:#F0F0F0">$fec_reg</span> <br>
<strong>Tipo:</strong> <span style="background-color: #F0F0F0">$tipo_usr</span> <strong>Epecialidad:</strong> <span style="background-color: #F0F0F0 ">$esp_usr</span> <br>
<strong>Nombre:</strong> <span style="background-color: #F0F0F0 ">$nom_usr $apep_usr $apem_usr</span><br>
<strong>Sexo:</strong> <span style="background-color: #F0F0F0 ">$sex_usr</span> <strong>Estado Civil:</strong> <span style="background-color:#F0F0F0">$estciv_usr</span> <br>
<strong>Fecha Nacimiento:</strong> <span style="background-color: #F0F0F0 ">$fecnac_usr</span> <strong>Lugar Nacimiento:</strong> <span style="background-color: #F0F0F0 ">$lugnac_usr</span> <br>
<strong>Direccion Actual:</strong><br><span style="background-color:#F0F0F0">$dir_usr</span> <br>
<strong>Telefonos:</strong> 
<strong>Casa: </strong><span style="background-color:#F0F0F0">$tel_usr</span> <strong>Celular: </strong><span style="background-color:#F0F0F0">$cel_usr</span> <strong>Otro:</strong> <span style="background-color:#F0F0F0">$otronum_usr</span> <br>
<strong>Nombre del Padre:</strong> <span style="background-color:#F0F0F0">$nompad_usr</span> <br>
<strong>Nombre de la Madre</strong> <span style="background-color:#F0F0F0">$nommad_usr</span> <br>
<br>
<strong><span style="background-color:#99c1da">Beneficiario</span></strong><br>
<strong>Nombre:</strong> <span style="background-color:#F0F0F0">$ben_usr</span><br>
<strong>Parentestco:</strong> <span style="background-color:#F0F0F0">$parben_usr</span> <strong>Fecha Nacimiento:</strong> <span style="background-color:#F0F0F0">$fecben_usr</span><br>
<br>
<strong><span style="background-color:#99c1da">Documentos Personales</span></strong><br>
<strong>Folio IFE:</strong> <span style="background-color:#F0F0F0">$folife_usr</span> <strong>CURP:</strong> <span style="background-color:#F0F0F0">$curp_usr</span>
<strong>No. Pasaporte:</strong> <span style="background-color:#F0F0F0">$numpass_usr</span><br>
<strong>Lugar Expedicion:</strong> <span style="background-color:#F0F0F0">$lexp_usr</span> 
<strong>Pais de Expedicion:</strong> <span style="background-color:#F0F0F0">$paispass_usr</span><br>
<strong>Fecha Expiracion:</strong> <span style="background-color:#F0F0F0">$fpass_usr</span><br>
<br>
<strong><span style="background-color:#99c1da">Ha Asistido a EUA</span></strong><br>
<strong>Nombre Empleador:</strong> <span style="background-color:#F0F0F0">$nomemp_usr</span><br>
<strong>Telefono Empleador:</strong> <span style="background-color:#F0F0F0">$telemp_usr</span>
<strong>Email:</strong> <span style="background-color:#F0F0F0">$emailemp_usr</span><br>
<strong>Supervisor:</strong> <span style="background-color:#F0F0F0">$supemp_usr</span><br>
<strong>Direccion USA:</strong> <span style="background-color:#F0F0F0">$diremp_usr</span><br>
<br>
<strong><span style="background-color:#99c1da">Tramite de Visas Anteriores</span></strong><br>
<strong>Visas Anteriores:</strong> <span style="background-color:#F0F0F0">$visaant_usr</span> 
<strong>Tipo:</strong> <span style="background-color:#F0F0F0">$visatip_usr</span><br>
<strong>Donde la Tramito:</strong> <span style="background-color:#F0F0F0">$visadon_usr</span><br>
<strong>Cuando la Tramito:</strong> <span style="background-color:#F0F0F0">$visacua_usr</span><br>
<br>
<strong><span style="background-color:#99c1da">Visas Anteriores</span></strong><br>
<strong>Visas Negadas:</strong> <span style="background-color:#F0F0F0">$visaneg_usr</span> <strong>Cuantas:</strong> <span style="background-color:#F0F0F0">$visanegcua_usr</span><br>
<strong>Porque:</strong> <span style="background-color:#F0F0F0">$visanegpor_usr</span>
</div>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>