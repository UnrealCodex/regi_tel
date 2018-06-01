<?php
$conexion=mysql_connect("localhost","mmigrant_nuevo_a","789poiQWE,.-") or die("Problemas en la conexion");
mysql_select_db("mmigrant_basedatos",$conexion) or die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("select * from defensa where int_fol = $_REQUEST[int_fol]" , $conexion) or die("Problemas en el select:".mysql_error());

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
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Bolsa de Trabajo');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30', PDF_HEADER_TITLE.'Fondo de Defensa', PDF_HEADER_STRING.'http://www.clubmexicano.org');

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
<div align="center" style=" line-height:60%"><h3> Fondo de Defensa</h3></div>
<div style=" line-height:140%">
<strong>N° de Socio:</strong> <span style="background-color:#F0F0F0">$reg[no_socio]</span><br>
<strong>Nombre Completo:</strong> <span style="background-color:#F0F0F0">$reg[nom_usr] $reg[apep_usr] $reg[apem_usr]</span> 
<strong>Sexo:</strong> <span style="background-color:#F0F0F0">$reg[sex_usr]</span><br>
<strong>Fecha de Nacimiento:</strong> <span style="background-color:#F0F0F0">$reg[dia]</span> <span style="background-color:#F0F0F0">$reg[mes]</span> <span style="background-color:#F0F0F0">$reg[ano]</span> 
<strong>Estado Civil:</strong> <span style="background-color:#F0F0F0">$reg[estciv_usr]</span><br>
<strong>RFC:</strong> <span style="background-color:#F0F0F0">$reg[rfc_usr]</span>
<strong>CURP:</strong> <span style="background-color:#F0F0F0">$reg[curp_usr]</span><br>
<strong>IFE:</strong> <span style="background-color:#F0F0F0">$reg[ife_usr]</span><br>
<strong>Pasaporte Mexicano:</strong> <span style="background-color:#F0F0F0">$reg[psprtemex_usr]</span>
<strong>Vigencia:</strong> <span style="background-color:#F0F0F0">$reg[psprtemex_vig_usr]</span><br>
<strong>N° Cartilla Militar:</strong> <span style="background-color:#F0F0F0">$reg[nocartmil_usr]</span>
<strong>N° Seguro Social:</strong> <span style="background-color:#F0F0F0">$reg[nosegsoc_usr]</span><br>
<strong>Visa USA:</strong> <span style="background-color:#F0F0F0">$reg[visusa_usr]</span>
<strong>Vigencia:</strong> <span style="background-color:#F0F0F0">$reg[visusa_vig_usr]</span><br>
<strong>Tipo Visa USA:</strong> <span style="background-color:#F0F0F0">$reg[tipvisusa_usr]</span><br>
<strong>Licencia de Conducir:</strong> <span style="background-color:#F0F0F0">$reg[liccond_usr]</span>
<strong>Vigencia:</strong><span style="background-color:#F0F0F0">$reg[liccond_vig_usr]</span><br> 
<strong>Grado de Estudios:</strong> <span style="background-color:#F0F0F0">$reg[grdestd_usr]</span>
<strong>Escuela:</strong> <span style="background-color:#F0F0F0">$reg[grdestd_esc_usr]</span><br>
<strong>Otros:</strong> <span style="background-color:#F0F0F0">$reg[otros_usr]</span><br><br>
<strong>DATOS FAMILIARES</strong><br>
<strong>Nombre Conyuge:</strong> <span style="background-color:#F0F0F0">$reg[nomcony_usr]</span><br>
<strong>Fecha Nacimiento de Conyuge:</strong> <span style="background-color:#F0F0F0">$reg[dia2]</span> <span style="background-color:#F0F0F0">$reg[mes2]</span> <span style="background-color:#F0F0F0">$reg[ano2]</span><br>
<strong>Lugar de Nacimiento:</strong> <br>
<strong>Municipio/Delegacion:</strong><span style="background-color:#F0F0F0">$reg[lugnaccony_mun_usr]</span>
<strong>Estado:</strong><span style="background-color:#F0F0F0">$reg[lugnaccony_estd_usr]</span>
<strong>Pais:</strong><span style="background-color:#F0F0F0">$reg[lugnaccony_pais_usr]</span><br>
<strong>N° de Hijos:</strong><span style="background-color:#F0F0F0">$reg[nohijs_usr]</span><br>
<strong>Nombre:</strong><span style="background-color:#F0F0F0">$reg[nombrhij1_usr]</span>
<strong>Edad:</strong><span style="background-color:#F0F0F0">$reg[edadhij1_usr]</span><br>
<strong>Vive con Usted:</strong><span style="background-color:#F0F0F0">$reg[viveconustd_usr]</span><br>
<strong>Nombre:</strong><span style="background-color:#F0F0F0">$reg[nombrhij2_usr]</span>
<strong>Edad:</strong><span style="background-color:#F0F0F0">$reg[edadhij2_usr]</span><br>
<strong>Vive con Usted:</strong><span style="background-color:#F0F0F0">$reg[viveconustd2_usr]</span><br><br>
<strong>DOMICILIO EN MEXICO</strong><br>
<strong>Calle y Numero:</strong></strong><span style="background-color:#F0F0F0">$reg[dis_usr]</span><br>
<strong>Colonia:</strong><span style="background-color:#F0F0F0">$reg[col_usr]</span>
<strong>Delegacion/Municipio:</strong><span style="background-color:#F0F0F0">$reg[munc_usr]</span><br>
<strong>Ciudad:</strong><span style="background-color:#F0F0F0">$reg[ciudad_usr]</span>
<strong>Estado:</strong><span style="background-color:#F0F0F0">$reg[estd_usr]</span> 
<strong>Codigo Postal:</strong><span style="background-color:#F0F0F0">$reg[codpost_usr]</span><br>
<strong>Telefono Fijo:</strong><span style="background-color:#F0F0F0">$reg[telcasa_usr]</span><br>
<strong>Telefono Celular:</strong><span style="background-color:#F0F0F0">$reg[cel_usr]</span><br>
<strong>Telefono del Trabajo:</strong><span style="background-color:#F0F0F0">$reg[teltrab_usr]</span><br><br>
<strong>IDENTIFICACIONES Y REGISTROS EN USA</strong>
<strong>N° de Seguro Social:</strong><span style="background-color:#F0F0F0">$reg[nosegsocusa_usr]</span><br>
<strong>Licencia de Conducir:</strong><span style="background-color:#F0F0F0">$reg[liccondusa_usr]</span><br>
<strong>Otra Identificacion:</strong><span style="background-color:#F0F0F0">$reg[otraid_usr]</span><br>
<strong>Estudios:</strong><span style="background-color:#F0F0F0">$reg[estudiosusaactual_usr]</span>
<strong>Escuela:</strong><span style="background-color:#F0F0F0">$reg[estudiosusaactual_esc_usr]</span><br>
<strong>Tiene Auto Propio:</strong><span style="background-color:#F0F0F0">$reg[autopropusa_usr]</span><br>
<strong>Cuentas Bancarias:</strong><span style="background-color:#F0F0F0">$reg[cuntabankusa]</span><br>
<strong>Paga Impuestos:</strong><span style="background-color:#F0F0F0">$reg[pagaimpusa_usr]</span><br>
<strong>Hijos nacidos en USA:</strong><br>
<strong>Nombre:</strong></strong><span style="background-color:#F0F0F0">$reg[hijosnacusa_nom_usr]</span>
<strong>Edad:</strong><span style="background-color:#F0F0F0">$reg[hijosnacusa_edad_usr]</span><br>
<strong>Direccion:</strong><span style="background-color:#F0F0F0">$reg[dir_usa]</span><br>
<strong>Ciudad:</strong><span style="background-color:#F0F0F0">$reg[ciudadusa_usr]</span>
<strong>Estado:</strong><span style="background-color:#F0F0F0">$reg[estadousa_usr]</span>
<strong>Codigo Postal:</strong><span style="background-color:#F0F0F0">$reg[codpostusa_usr]</span><br>
<strong>Telefono de Casa:</strong><span style="background-color:#F0F0F0">$reg[telcasusa_usr]</span><br>
<strong>Telefono Celular:</strong><span style="background-color:#F0F0F0">$reg[celusa_usr]</span><br><br>
<strong>EMPLEO EN USA</strong>
<strong>Patron:</strong><span style="background-color:#F0F0F0">$reg[nombrpatr_usr]</span><br>
<strong>Direccion:</strong><span style="background-color:#F0F0F0">$reg[dirpatr_usr]</span><br>
<strong>Ciudad:</strong><span style="background-color:#F0F0F0">$reg[ciudadpatr_usr]</span><br>
<strong>Estado:</strong><span style="background-color:#F0F0F0">$reg[estdpatr_usr]</span><br>
<strong>Codigo Postal:</strong><span style="background-color:#F0F0F0">$reg[codpostpatr_usr]</span><br>
<strong>Telefono de Trabajo:</strong><span style="background-color:#F0F0F0">$reg[teltrabusa_usr]</span><br>
<strong>Antiguedad:</strong><span style="background-color:#F0F0F0">$reg[antigedadusa_usr]</span><br><br>
<strong>HISTORIAL MIGRATORIO</strong>
<strong>Visas Anteriores</strong><span style="background-color:#F0F0F0">$reg[a]</span><br>
<strong>Tipo:</strong><span style="background-color:#F0F0F0">$reg[visaant_tipo_usr_]</span><br>
<strong>Fecha Emision:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_emision_usr]</span>
<strong>Vencimiento:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_venc_usr]</span><br>
<strong>Tipo:</strong><span style="background-color:#F0F0F0">$reg[visaant_tipo_usr1]</span><br>
<strong>Fecha Emision:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_emision_usr1]</span>
<strong>Vencimiento:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_venc_usr1]</span><br>
<strong>Tipo:</strong><span style="background-color:#F0F0F0">$reg[visaant_tipo_usr2]</span><br>
<strong>Fecha Emision:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_emision_usr2]</span>
<strong>Vencimiento:</strong><span style="background-color:#F0F0F0">$reg[visaant_fecha_venc_usr2]</span><br>
<strong>Primera ves que ingreso a USA</strong>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[primvezingrsousa_usr]</span><br>
<strong>Forma:</strong><span style="background-color:#F0F0F0">$reg[primvezingrsousa_forma_usr]</span><br>
<strong>Ultima ves que ingreso a USA</strong>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[ultvezingrsousa_usr]</span><br>
<strong>Forma:</strong><span style="background-color:#F0F0F0">$reg[ultvezingrsousa_forma_usr]</span><br>
<strong>Cancelacion de Visa</strong>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[canceldevisa_fecha_usr]</span><br>
<strong>Motivo:</strong><span style="background-color:#F0F0F0">$reg[canceldevisa_motivo_usr]</span><br>
<strong>Deportaciones Anteriores</strong>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[deportant__fechausr]</span><br>
<strong>Motivo:</strong><span style="background-color:#F0F0F0">$reg[deportant_motivo_usr]</span><br>
<strong>Detenciones en USA</strong>
<strong>Fecha:</strong><span style="background-color:#F0F0F0">$reg[detencionusa_fecha_us]</span><br>
<strong>Motivo:</strong><span style="background-color:#F0F0F0">$reg[detencionusa_motivo_usr]</span><br>
<strong>Aplicacion para Residencia:</strong><span style="background-color:#F0F0F0">$reg[aplicaciresid_usr]</span><br>
<strong>N° de Caso:</strong><span style="background-color:#F0F0F0">$reg[aplicaciresid_Nocaso_usr]</span><br>
<strong>Ha sido Defraudado por alguien para cruzar a USA:</strong><span style="background-color:#F0F0F0">$reg[defraudusa_usr]</span><br>
<strong>Nombre de la persona:</strong><span style="background-color:#F0F0F0">$reg[defraudusa_name_usr]</span><br>
<strong>Ha sido Defraudado por alguien en algun tramite migratorio:</strong><span style="background-color:#F0F0F0">$reg[defraudtramitusa_usr]</span><br>
<strong>Nombre de la persona:</strong><span style="background-color:#F0F0F0">$reg[defraudtramitsa_name_usr]</span><br>
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