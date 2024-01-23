<?php
define('FPDF_FONTPATH','font/');
require('../fpdf/fpdf.php');
include_once("../include/funciones_php.php");
//include ("../clases/class_participante.php");

date_default_timezone_set('UTC');

	$mesAct = date("m");
 	$diaAct = date("d");
	$anoAct = date ("Y");

	 $fecha=$diaAct."/".$mesAct."/".$anoAct;  

$usuario=$_GET['usuario'];
$nombre=$_GET['nombre'];
$tipo=$_GET['tipo'];


//$arreglo1= new Participante();
//$arreglo=$arreglo1->repConstanciaEstudio($codigo_curso,$ano,$codigo_seccion,$cedula);

//$nRegistros=count($arreglo);
//$resultado=$bd->consultar($sql,'ARREGLO');

/*if($arreglo)
	$nRegistros=count($arreglo);
else 
	$nRegistros=0;
*/
$diasLetras=Numero2Letras($diaAct);
$mesLetras=mesEnLetras($mesAct);
$anoLetras=Numero2Letras($anoAct);
//$contenido=$arreglo[0]['contenido'];
//$resultado=explode(",",$contenido);
//var_dump($resultado);

class PDF extends FPDF
{
	function Header()
	{
				
		$this->Image('../img/inces_nuevo.jpg',95,15,30,30);
		
		$this->Ln(30);
		
		$this->SetFont('Arial','B','14');
		$this->Cell(180,10,'USUARIO REGISTRADO',0,1,'C');
	
	}	

	
	function Footer() {     //Go to 1.5 cm from bottom     $this->SetY(-15);   
     $this->SetFont('Arial','I',8);      
	 		$this->Image('../img/pie_pagina_nuevo.jpg',20,250,180,20);

	 
	 }
}

$pdf=new PDF("P","mm","letter");

$pdf->SetFont('Arial','',10);
$pdf->SetAutoPageBreak(true,15);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(999,999,999);
$pdf->SetTextColor(0,0,0);
$pdf->SetMargins(20,20,20);
// $pdf->SetLeftMargin(20);
// $pdf->SetTopMargin(20);
$pdf->SetLineWidth(0.2);


$pdf->AddPage();
$pdf->Ln(4);

$pdf->MultiCell(180,6,"Quien suscribe, Jefe de CFS. Cumaná del INCES Regional Sucre, por medio de la presente, hace constar que el (la) ciudadano (a): ".$nombre." titular de la Cédula de Identidad Nº ".$usuario.", aprobó el curso de: ".$tipo.", con una duración de ".$tipo." horas.",0,1);

$pdf->Ln(4);
/*$pdf->Cell(180,6,'El contenido de la Opción Formativa se detalla a continuación:',0,1,'J');
$pdf->Ln(2);
for($i=0; $i<count($resultado);$i++)
{
	$pdf->Cell(180,4,'» '.$resultado[$i],0,1,'J');
	$pdf->Ln(1);
}*/

$pdf->MultiCell(180,8,"Constancia que se expide a petición de parte interesada en Cumaná a los ".$diasLetras." (".$diaAct.") días de ".$mesLetras." de ".$anoAct.".",0,1,'J');
$pdf->Ln(10);
$pdf->Cell(180,8,'Atentamente',0,1,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','B','10');
$pdf->Cell(180,8,'Ing. Víctor Marchán',0,1,'C');
$pdf->Cell(180,8,'Jefe de CFS. Cumaná',0,1,'C');
$pdf->Cell(180,8,'INCES REGIONAL SUCRE',0,1,'C');
$pdf->Cell(180,8,'Designación Punto de Cuenta N° OA-2014-11-242 de fecha 17/11/2014',0,1,'C');



$pdf->AliasNbPages();
$pdf->Output();
?> 