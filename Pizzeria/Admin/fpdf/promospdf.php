<?php
require('fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  
    // Arial bold 15
    $this->SetFont('Arial','',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Tabla de Promociones',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(10,5,'ID',1,0,'C',0);
    $this->Cell(60,5,'Nombre',1,0,'C',0);
    $this->Cell(30,5,'Precio',1,0,'C',0);
    $this->Cell(90,5,'Caracteristicas',1,1,'C',0);


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
$consulta="SELECT * FROM promociones";
$resultado =$mysqli->query($consulta);


$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row =$resultado-> fetch_assoc()){
    $pdf->Cell(10,5,$row['id_promociones'],1,0,'C',0);
    $pdf->Cell(60,5,$row['nombre'],1,0,'C',0);
    $pdf->Cell(30,5,$row['precio'],1,0,'C',0);
    $pdf->Cell(90,5,$row['caracteristicas'],1,1,'C',0);
}

$pdf->Output();
?>