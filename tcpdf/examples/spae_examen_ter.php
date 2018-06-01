<?php


/////////////////////////
$database   =  "spae";
$username   =  "spae_usr";
$password   =  "789poiQWE";
/////////////////////////

$link  = mysqli_connect('localhost', $username, $password,$database);
//$db    = mysqli_select_db($link);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query       = sprintf("SELECT * FROM pins WHERE fol_pin=16");
$result      = @mysqli_query($link,$query);
$rowAccount  = @mysqli_fetch_array($result);
/////////////////
$query2       = sprintf("SELECT * FROM pins WHERE fol_pin=16");
$result2      = @mysqli_query($link,$query2);
$rowAccount2  = @mysqli_fetch_array($result2);



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
$pdf->SetAuthor('Spae');
$pdf->SetTitle('Test');
$pdf->SetSubject('TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30', PDF_HEADER_TITLE.'Formulario Visa', PDF_HEADER_STRING.'SPAE');

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

<div align="center">
<table width="100%" border="0" align="center">
  <tr>
    <td align="left"><img src="logo_spae.png" height="105px" ></td>
    
    <td align="right"><img src="133.jpg" height="105px"></td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td align="left"></td>
    <td width="15">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="120" align="right"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td width="15">&nbsp;</td>
  <td>&nbsp;</td>
  <td width="120">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><strong>Nombre</strong>:</td>
    <td width="15" align="left">&nbsp;</td>
    <td align="left">$rowAccount[user_pin]</td>
    <td width="120" rowspan="5" align="center"><img src="cre3.jpg" width="100px" ></td>
  </tr>
  <tr>
    <td align="right"><strong>Email:</strong></td>
    <td width="15" align="left">&nbsp;</td>
    <td align="left">$rowAccount[email_pin]</td>
  </tr>
  <tr>
    <td align="right"><strong>Telefono:</strong></td>
    <td width="15" align="left">&nbsp;</td>
    <td align="left">$rowAccount[tel_pin]</td>
  </tr>
  <tr>
    <td align="right"><strong>Celular:</strong></td>
    <td width="15" align="left">&nbsp;</td>
    <td align="left">$rowAccount[cel_pin]</td>
  </tr>
  <tr>
    <td align="right"><strong>Direccion</strong></td>
    <td width="15" align="left">&nbsp;</td>
    <td align="left">$rowAccount[dir_pin]</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">&nbsp;</td>
  <td width="120">&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">&nbsp;</td>
  <td width="120">&nbsp;</td>
  </tr>
  <tr>
  <td align="right"><strong>Nombre Examen:</strong></td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">Curso Introduccion a la Planta</td>
  <td width="120" rowspan="4" align="center"><img src="bien.png" width="100px" ></td>
  </tr>
  <tr>
  <td align="right"><strong>Presentado:</strong></td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">2017/08/25</td>
  </tr>
  <tr>
  <td align="right"><strong>Preguntas Correctas:</strong></td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">8 de 10</td>
  </tr>
  <tr>
  <td align="right"><strong>Calificacion:</strong></td>
  <td width="15" align="left">&nbsp;</td>
  <td align="left">Aprobatoria</td>
  </tr>
</table>
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