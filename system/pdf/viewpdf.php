<?php
  require('../fpdf/fpdf.php');

  $pageWidth = 400; // Example: A4 width is 210mm
  $pdf = new FPDF('L', 'mm', array($pageWidth, 297)); // 'L' for landscape orientation
  // Custom page width (adjust as needed)
  $number=0;
 
  $pdf->AddPage();
  $customHeaderNames = array(
    $number++ => 'ID',
    'u_name' => 'FOOD NAME',
    'u_type' => 'TYPE',
    'u_revenue' => 'REVENUE',
    'u_price' => 'PRICE',
    'u_date' => 'DATE',
    // Add more as needed
);

$con=mysqli_connect('localhost','root','','agriculture');
$sql=mysqli_query($con," SELECT u_name, u_type, u_revenue, u_price, u_date FROM `foods`");
$tableName = "ALL FOOD REPORT";

// Set font
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, '' . $tableName);

if ($sql->num_rows > 0) {
  // Display table headers
  $pdf->Ln(10); // Add a new line with spacing
  $pdf->SetFont('Arial', 'B', 12);
while ($fieldInfo = $sql->fetch_field()) {
  $header[] = $fieldInfo->name;
  // Adjust the width of the cell based on the column name
  $customName = isset($customHeaderNames[$fieldInfo->name]) ? $customHeaderNames[$fieldInfo->name] : $fieldInfo->name;
  $cellWidth = ($fieldInfo->name == 'u_toolname') ? 60 : 60;
  $pdf->Cell($cellWidth, 10, $customName, 1);
}
$pdf->Ln(); // Add extra spacing between headers and data

while ($row = $sql->fetch_assoc()) {
  foreach ($header as $col) {
      // Adjust the width of the cell based on the column name
      $cellWidth = ($col == 'u_toolname') ? 60 : 60;
      $pdf->Cell($cellWidth, 10, $row[$col], 1);
  }
  $pdf->Ln(); // Move to the next line for the next row
}
  $pdf->Output();
}
?>