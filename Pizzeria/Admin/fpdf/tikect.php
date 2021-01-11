<?php

$id_orden=$_GET['id'];

require('fpdf.php');


class PDF extends FPDF
{

function Header()
{
   

    $this->SetFillColor(253,135,39);
$this->Rect(0,0,220,40,'F');
$this->SetFont('Arial','B',30);
$this->SetY(20);
$this->SetTextColor(255,255,255);
$this->Write(5,'Hilo Frito');
$this->Ln(30);
$this->SetTextColor(99,91,89);
$this->Write(5,' Ticket de Compra');


    $this->Image('logo.jpg',160,5,32);
   





}

function Footer()
{
   
    $this->SetFillColor(253,135,39);
    $this->Rect(0,260,220,40,'F');
    $this->SetFont('Arial','B',10);
    $this->SetY(290);
    $this->SetX(5);
     $this->Write(5,'Ticket solo valido en Hilo Frio ');
    $this->SetTextColor(255,255,255);
    


}
}
require 'cn.php';
$reporte="SELECT * FROM ordenes WHERE id_orden ='".$id_orden."'";
$repor=$mysqli->query($reporte);


$consulta= "SELECT * FROM detalle_orden WHERE id_orden = '".$id_orden."'";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
$pdf->Ln(15);
$pdf->SetFont('Arial','B',15);
$pdf->Write(5,'Datos de la Orden');
$pdf->SetY(40);
$pdf->Ln(35);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(18,5,utf8_decode('No.de orden'),1,0,'c',0); 
$pdf->Cell(30,5,utf8_decode('Nombre'),1,0,'c',0);
$pdf->Cell(36,5,utf8_decode('Telefono'),1,0,'c',0);
$pdf->Cell(110,5,utf8_decode('Direccion'),1,1,'c',0); 



$fila=$repor->fetch_assoc();
$pdf->Cell(18,4,$fila['id_orden'],1,0,'c',0); 
$pdf->Cell(30,4,$fila['nombre'],1,0,'c',0);
$pdf->Cell(36,4,$fila['telefono'],1,0,'c',0);
$pdf->Cell(110,4,$fila['direccion'],1,1,'c',0);


$code=$id_orden;
$pdf->Image('../../codigos/'.$code.'.png',10,30,15);

$pdf->Ln(10);
$pdf->SetFont('Arial','B',15);
$pdf->Write(5,'Detalles de la Orden');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('No. '),1,0,'c',0); 
$pdf->Cell(20,4,utf8_decode('No. de Orden'),1,0,'c',0);
$pdf->Cell(35,4,utf8_decode('Nombre'),1,0,'c',0);
$pdf->Cell(90,4,utf8_decode('Complemento'),1,0,'c',0); 
$pdf->Cell(15,4,utf8_decode('Cantidad'),1,0,'c',0); 
$pdf->Cell(24,4,utf8_decode('Total'),1,1,'c',0); 

while($row=$resultado->fetch_assoc()){

            $pdf->Cell(10,4,$row['id_detalle'],1,0,'c',0); 
            $pdf->Cell(20,4,$row['id_orden'],1,0,'c',0); 
            $pdf->Cell(35,4,$row['nombre'],1,0,'c',0);
            $pdf->Cell(90,4,$row['complementos'],1,0,'c',0);  
            $pdf->Cell(15,4,$row['cantidad'],1,0,'c',0);
            $pdf->Cell(24,4,$row['Total'],1,1,'c',0);
            
         

        
    
}
$pdf->Ln(15);
$pdf->SetFont('Arial','B',25);
$pdf->SetY(230);
$pdf->Write(5,'Total a pagar:');
$pdf->SetY(190);

$pdf->Ln(55);
$pdf->SetFont('Arial','B',25);
$pdf->Write(4,'$');

$pdf->SetY(244.09);
$pdf->SetX(15);

$pdf->Cell(36,6,$fila['total'],0,0,'c',0);

$pdf->Output();

?>