<?php 
	include 'functions.php';
	$q = $_GET['q'];
	require_once('fpdf.php');
	$sql = "select concat(first_name, ' ', last_name) as fullname from customer where customerid = ".$q;
	$result = queryMysql($sql);	
	$name = $result->fetch_assoc()['fullname'];
	queryMysql('create view contview as select date, amount, type from contribution where customerid = '.$q);
	class PDF extends FPDF
	{
	// Page header
	function Header()
	{
	    // Logo
	    $this->Image('smido.png',20,20,10);
	    $this->Cell(10);
	    $this->SetFont('Arial','B',13);
	    $this->Cell(40,10,'SMID Fund',0,1,'L');
	    
	    // Move to the right
	    //$this->Cell(80);
	    // Title
	    global $name;
	    $this->Cell(40,10,'Contribution Statement for '.$name.' as at '.date('d-m-Y'),0,1,'L');
	    // Line break
	    $this->Ln(10);
	}
	 
	// Page footer
	function Footer()
	{
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
	}
	 
	global $connection;
	$display_heading = array('date'=>'Date', 'amount'=> 'Amount', 'type'=> 'Type');
	 
	$result = $connection->query("SELECT date, amount, type FROM contview");
	$header = $connection->query("SHOW columns FROM contview");
	 
	$pdf = new PDF();
	$pdf->SetMargins(20, 20, 20);
	//header
	$pdf->AddPage();
	//foter page
	$pdf->AliasNbPages();
	$pdf->SetFont('Arial','B',12);
	foreach($header as $heading) {
	$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
	}
	foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
	$pdf->Cell(40,12,$column,1);
	}
	queryMysql('drop view contview');

	$sql = "select sum(amount) as cont from contribution where type = 'Contribution' and customerid = ".$q;
	$result = queryMysql($sql);	
	$cont = $result->fetch_assoc()['cont'];

	$sql = "select sum(amount) as witha from contribution where type = 'Withdrawal' and customerid = ".$q;
	$result = queryMysql($sql);	
	$with = $result->fetch_assoc()['witha'];
	$pdf->Ln(20);
	$pdf->Cell(40,10,'Total Contribution: GHC'. $cont,0,1,'L');
	$pdf->Ln(5);
	$pdf->Cell(40,10,'Total Withdrawal: GHC'. $with,0,1,'L');
	$pdf->Ln(5);
	$pdf->Cell(40,10,'Balance: GHC'. ($cont - $with),0,1,'L');
	$pdf->Output($name .'\'s contribution statement.pdf', 'I');


?>