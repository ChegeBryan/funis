<?php

session_start();

require_once '../../include/fpdf182/fpdf.php';
require_once '../config/db.php';

class PDF extends FPDF
{
  // Page header
  function Header()
  {
    // Move to the right
    $this->Cell(5);
    // Add generated date
    $this->Cell(30, 10, date("m/d/Y H:i:s"), 0, 0, 'C');
    // Arial bold 15
    $this->SetFont('Arial', 'B', 15);
    // Move to the right
    $this->Cell(120);
    // Title
    $this->Cell(30, 10, 'CCM Scheduled Appointments', 0, 0, 'R');
    // Line break
    $this->Ln(13);
  }

  // Page footer
  function Footer()
  {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial', 'I', 8);
    // Page number
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }

  // Orders table
  function orders($header, $conn)
  {
    // Colors, line width and bold font
    $this->SetFillColor(0, 123, 255, 1);
    $this->SetTextColor(255);
    $this->SetDrawColor(255);
    $this->SetLineWidth(.1);
    $this->SetFont('', 'B');
    // Header
    $w = array(15, 45, 30, 35, 30, 35);
    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'L', true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224, 235, 255);
    $this->SetTextColor(0);
    $this->SetFont('');

    // Data
    $fill = false;


    $sql = "SELECT orders.id, totalprice, orderstatus, paymentmode, timestamp, firstname, lastname FROM orders JOIN usersmeta WHERE orders.uid=usersmeta.uid ORDER BY orders.id DESC";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $n = 1;
      while ($row = $result->fetch_array()) {
        $this->Cell($w[0], 9, $n, 'LR', 0, 'L', $fill);
        $this->Cell($w[1], 9, $row['firstname'] + ' ' + $row['lastname'], 'LR', 0, 'L', $fill);
        $this->Cell($w[2], 9, $row['totalprice'], 'LR', 0, 'L', $fill);
        $this->Cell($w[3], 9, $row['orderstatus'], 'LR', 0, 'L', $fill);
        $this->Cell($w[4], 9, $row['paymentmode'], 'LR', 0, 'L', $fill);
        $this->Cell($w[5], 9, date('M-d-Y', strtotime($row['timestamp'])), 'LR', 0, 'L', $fill);
        $this->Ln();
        $fill = !$fill;
        $n++;
      }
      // Free result set
      unset($result);
    }
    // Closing line
    $this->Cell(array_sum($w), 0, '', 'T');
  }
}

$pdf = new PDF();
// Column headings
$header = array('#', 'Customer Name',  'Total Price', 'Order Status', 'Payment Mode', 'Order Placed On');

$pdf->AliasNbPages();
$pdf->SetFont('Arial', '', 11);
$pdf->AddPage();
$pdf->orders($header, $con);
$pdf->Output('D', 'ORDERS_REPORT_' . date("m/d/Y H:i:s") . '.pdf');
