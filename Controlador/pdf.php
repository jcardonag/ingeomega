
<?php
require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/Ingeomega.png',155,8,50);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(50,10,'Reporte Usuario',0,0,'C');
    // Salto de línea
    $this->Ln(30);
    //
    $this->Cell(30,10,utf8_decode('N°'),1,0,'C',0);
    $this->Cell(60,10,'Usuario',1,0,'C',0);
    $this->Cell(40,10,utf8_decode('Contraseña'),1,0,'C',0);
    $this->Cell(20,10,'Rol',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../Controlador/database.php';
$consulta  = "SELECT * FROM usuario";
$resultado = $conex->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(30,10,$row['idusuario'],1,0,'C',0);
    $pdf->Cell(60,10,$row['usuario'],1,0,'C',0);
    $pdf->Cell(40,10,$row['contrasena'],1,0,'C',0);
    $pdf->Cell(20,10,$row['rol'],1,1,'C',0);

}

$pdf->Output();
?>
