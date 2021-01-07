<?php
require('fpdf.php');
class PDF extends FPDF
{
   
function Header()
{
  
    
    // Arial bold 15
    $this->SetFont('Arial','',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Tabla de Ordenes',0,0,'C');
    // Salto de línea
 
    $this->Ln(10);
    $this->SetX(1);
    $this->Cell(10,5,'ID',1,0,'C',0);
    $this->Cell(30,5,'Nombre',1,0,'C',0);
    $this->Cell(30,5,'Telefono',1,0,'C',0);
    $this->Cell(30,5,'Direccion',1,0,'C',0);
    $this->Cell(30,5,'Total',1,0,'C',0);
    $this->Cell(38,5,'Hora de solicitud',1,1,'C',0);
    


}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta="SELECT * FROM ordenes";
$resultado =$mysqli->query($consulta);


$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetX(1);

while($row =$resultado-> fetch_assoc()){
    $pdf->SetX(1);
    $pdf->Cell(10,5,$row['id_orden'],1,0,'C',0);
    $pdf->Cell(30,5,$row['nombre'],1,0,'C',0);
    $pdf->Cell(30,5,$row['telefono'],1,0,'C',0);
    $pdf->Cell(30,5,$row['direccion'],1,0,'C',0);
    $pdf->Cell(30,5,$row['total'],1,0,'C',0);
    $pdf->Cell(38,5,$row['fecha_hora_solicitud'],1,1,'C',0);
    
}

$pdf->Output();
?>