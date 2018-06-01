<?php
$conexion=mysql_connect("localhost","mmigrant_nuevo_a","789poiQWE,.-") or die("Problemas en la conexion");
mysql_select_db("mmigrant_basedatos",$conexion) or die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("select * from intake where int_fol = $_REQUEST[int_fol]" , $conexion) or die("Problemas en el select:".mysql_error());

$reg=mysql_fetch_array($registros) ;

$int_fol = $reg[int_fol];

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
$pdf->SetAuthor('Mmigrante');
$pdf->SetTitle('Intake');
$pdf->SetSubject('Intake');
$pdf->SetKeywords('Intake');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30', PDF_HEADER_TITLE.'Intake Form DOL, DHS, AC', PDF_HEADER_STRING.'http://www.clubmexicano.org');

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
<div align="center" style=" line-height:60%"><h3> Intake form DOL, DHS, AC</h3></div>
<div style=" line-height:140%">
<strong>Folio:</strong><span style="background-color:#F0F0F0">$reg[int_fol]</span><br>
<strong>Nombre:</strong> <span style="background-color:#F0F0F0">$reg[nom_usr] $reg[apep_usr] $reg[apem_usr]</span><br>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[fechaact]</span><br>
<strong>Bussines Name:</strong><span style="background-color:#F0F0F0"> $reg[bussines]</span><br>
<strong>Address:</strong><span style="background-color:#F0F0F0"> $reg[adress]</span><br>
<strong>Telephones Bussines:</strong><span style="background-color:#F0F0F0"> $reg[tel_bss]</span> <strong>Fax:</strong><span style="background-color:#F0F0F0">$reg[fax]</span> <strong>Other:</strong><span style="background-color:#F0F0F0">$reg[otrobuss]</span><br>
<strong>Signatory Authority</strong> <br>
<strong>Name:</strong><span style="background-color:#F0F0F0">$reg[signa]</span><br>
<strong>Title:</strong><span style="background-color:#F0F0F0">$reg[title]</span><br>
<strong>Date of birth:</strong> <span style="background-color:#F0F0F0">$reg[fechanac]</span><br>
<strong>Place of birth:</strong><span style="background-color:#F0F0F0">$reg[ciudad]</span><br>

<strong>Ein Number:</strong> <span style="background-color:#F0F0F0">$reg[ein]</span><br>
<strong>Year bussines established:</strong> <span style="background-color:#F0F0F0">$reg[year_esta]</span><br>
<strong>Contact Person:</strong><span style="background-color:#F0F0F0"> $reg[contc]</span><br>
<strong>Telephone:</strong> <span style="background-color:#F0F0F0">$reg[contel]</span><br>
<strong>Fax:</strong><span style="background-color:#F0F0F0"> $reg[confax]</span><br>
<strong>Place of Work:</strong><span style="background-color:#F0F0F0">$reg[place]</span><br>
<strong>List Job duties that worker will perform.</strong><br>
<span style="background-color:#F0F0F0">$reg[listduties]</span><br>
<strong>List of wage rates (hourly or piece rate) request for workers.</strong><br>
<span style="background-color:#F0F0F0">$reg[listwage]</span><br>
<strong>Number or temp workers need:</strong><span style="background-color:#F0F0F0"> $reg[tempwor]</span><br>
<strong>Dates Nedded:</strong> <span style="background-color:#F0F0F0">$reg[dates]</span><br>
<strong>Total weekly hours:</strong> <span style="background-color:#F0F0F0">$reg[totalhrs]</span><br>
<strong>Hours</strong><span style="background-color:#F0F0F0"> $reg[am]</span> <strong>AM to</strong> <span style="background-color:#F0F0F0">$reg[pm]</span> <strong>PM</strong>
<br>
<br>
I hereby authorize MMigrante to be the solely appointed representative on behalf of. regarding the Visa process. 
MMigrante is appointed to facilitate, administer and arrange for all communication with the American Consulate in Monterrey, Mexico throughout the Visa approval process.
<br>
<br>
<br>
Authorization Signature:________________________________________________
<br>
<br>
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