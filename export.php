<?php
// Load file koneksi.php
include "koneksi.php";

// Load plugin PHPExcel nya
require_once 'PHPExcel/PHPExcel.php';

// Panggil class PHPExcel nya
$excel = new PHPExcel();

$sheet = $excel->setActiveSheetIndex(0);
$sheet->setTitle('X1');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "X11");  
$sheet->setCellValue('C1', "X12");  
$sheet->setCellValue('D1', "X13");   

 
$sql = mysqli_query($conn, "SELECT * FROM x1");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['x11']);
	$sheet->setCellValue('C'.$numrow, $data['x12']);
	$sheet->setCellValue('D'.$numrow, $data['x13']);
	$numrow++; // Tambah 1 setiap kali looping
}

$sheet = new PHPExcel_Worksheet($excel);
$excel->addSheet($sheet);
$sheet->setTitle('X2');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "X21");  
$sheet->setCellValue('C1', "X22"); 
 
$sql = mysqli_query($conn, "SELECT * FROM x2");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['x21']);
	$sheet->setCellValue('C'.$numrow, $data['x22']);
	$numrow++; // Tambah 1 setiap kali looping
}


$sheet = new PHPExcel_Worksheet($excel);
$excel->addSheet($sheet);
$sheet->setTitle('X3');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "X31");  
$sheet->setCellValue('C1', "X32");

 
$sql = mysqli_query($conn, "SELECT * FROM x3");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['x31']);
	$sheet->setCellValue('C'.$numrow, $data['x32']);
	$numrow++; // Tambah 1 setiap kali looping
}


$sheet = new PHPExcel_Worksheet($excel);
$excel->addSheet($sheet);
$sheet->setTitle('X4');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "X41");  
$sheet->setCellValue('C1', "X42");  
$sheet->setCellValue('D1', "X43");  
$sheet->setCellValue('D1', "X44");
 
$sql = mysqli_query($conn, "SELECT * FROM x4");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['x41']);
	$sheet->setCellValue('C'.$numrow, $data['x42']);
	$sheet->setCellValue('D'.$numrow, $data['x43']);
	$sheet->setCellValue('D'.$numrow, $data['x44']);
	$numrow++; // Tambah 1 setiap kali looping
}


$sheet = new PHPExcel_Worksheet($excel);
$excel->addSheet($sheet);
$sheet->setTitle('X5');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "X51");  
$sheet->setCellValue('C1', "X52");  
$sheet->setCellValue('D1', "X53");  

 
$sql = mysqli_query($conn, "SELECT * FROM x5");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['x51']);
	$sheet->setCellValue('C'.$numrow, $data['x52']);
	$sheet->setCellValue('D'.$numrow, $data['x53']);

	$numrow++; // Tambah 1 setiap kali looping
}

$sheet = new PHPExcel_Worksheet($excel);
$excel->addSheet($sheet);
$sheet->setTitle('Y');

 
$sheet->setCellValue('A1', "Responden");  
$sheet->setCellValue('B1', "Y1");  
$sheet->setCellValue('C1', "Y2");  
$sheet->setCellValue('D1', "Y3");  
$sheet->setCellValue('E1', "Y4");  
$sheet->setCellValue('F1', "Y5");  

 
$sql = mysqli_query($conn, "SELECT * FROM y");

$numrow = 2;  
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$sheet->setCellValue('A'.$numrow, $data['responden']);
	$sheet->setCellValue('B'.$numrow, $data['y1']);
	$sheet->setCellValue('C'.$numrow, $data['y2']);
	$sheet->setCellValue('D'.$numrow, $data['y3']);
	$sheet->setCellValue('E'.$numrow, $data['y4']);
	$sheet->setCellValue('F'.$numrow, $data['y5']);
	$numrow++; // Tambah 1 setiap kali looping
}


// Proses file excel
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="Data Mentah.xls"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$write->save('php://output');
?>
