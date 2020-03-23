<?php 
// menghubungkan dengan koneksi
error_reporting(1);
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filexls']['name']) ;
move_uploaded_file($_FILES['filexls']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filexls']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filexls']['name'],false);
// menghitung jumlah baris data yang ada

//data sheet x1
$jumlah_baris = $data->rowcount($sheet_index=0);
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 0);
	$x11   = $data->val($i, 2, 0);
	$x12  = $data->val($i, 3, 0);
	$x13  = $data->val($i, 4, 0);
	$total	= $x11+$x12+$x13;
	$total_2= $total*$total;

	if($res != "" && $x11 != "" && $x12 != "" && $x13 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into x1 values('$res','$x11','$x12','$x13','$total','$total_2')");
		$berhasil++;
	}
}

//data sheet x2
$jumlah_baris = $data->rowcount($sheet_index=1);
// jumlah default data yang berhasil di import
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 1);
	$x21   = $data->val($i, 2, 1);
	$x22  = $data->val($i, 3, 1);
	$total	= $x21+$x22;
	$total_2= $total*$total;

	if($res != "" && $x21 != "" && $x22 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into x2 values('$res','$x21','$x22','$total','$total_2')");
		$berhasil++;
	}
}

//data sheet x3
$jumlah_baris = $data->rowcount($sheet_index=2);
// jumlah default data yang berhasil di import
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 2);
	$x31   = $data->val($i, 2, 2);
	$x32  = $data->val($i, 3, 2);
	$x33  = $data->val($i, 4, 2);
	$total	= $x31+$x32+$x33;
	$total_2= $total*$total;

	if($res != "" && $x31 != "" && $x32 != "" && $x33 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into x3 values('$res','$x31','$x32','$x33','$total','$total_2')");
		$berhasil++;
	}
}

$jumlah_baris = $data->rowcount($sheet_index=3);
// jumlah default data yang berhasil di import
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 3);
	$x41   = $data->val($i, 2, 3);
	$x42  = $data->val($i, 3, 3);
	$x43  = $data->val($i, 4, 3);
	$x44  = $data->val($i, 5, 3);
	
	$total	= $x41+$x42+$x43+$x44;
	$total_2= $total*$total;

	if($res != "" && $x41 != "" && $x42 != "" && $x43 != "" && $x44 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into x4 values('$res','$x41','$x42','$x43','$x44','$total','$total_2')");
		$berhasil++;
	}
}

$jumlah_baris = $data->rowcount($sheet_index=4);
// jumlah default data yang berhasil di import
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 4);
	$x51   = $data->val($i, 2, 4);
	$x52  = $data->val($i, 3, 4);
	$x53  = $data->val($i, 4, 4);
	$total	= $x51+$x52+$x53;
	$total_2= $total*$total;

	if($res != "" && $x51 != "" && $x52 != "" && $x53 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into x5 values('$res','$x51','$x52','$x53','$total','$total_2')");
		$berhasil++;
	}
}

$jumlah_baris = $data->rowcount($sheet_index=5);
// jumlah default data yang berhasil di import
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$res     = $data->val($i, 1, 5);
	$y1   = $data->val($i, 2, 5);
	$y2  = $data->val($i, 3, 5);
	$y3  = $data->val($i, 4, 5);
	$y4  = $data->val($i, 5, 5);
	$y5  = $data->val($i, 6, 5);
	$total	= $y1+$y2+$y3+$y4+$y5;
	$total_2= $total*$total;

	if($res != "" && $y1 != "" && $y2 != "" && $y3 != "" && $y4 != "" && $y5 != ""){
		// input data ke database  
		mysqli_query($conn,"INSERT into y values('$res','$y1','$y2','$y3','$y4','$y5','$total','$total_2')");
		$berhasil++;
	}
}
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filexls']['name']);

// alihkan halaman ke index.php
if($berhasil > 0 ){
echo "<meta http-equiv='refresh' content='0;url=http://localhost/eucs_m/index.php?status=success&act=insert'>";
}else{
	//mysqli_query("ROLLBACK");
echo "<meta http-equiv='refresh' content='0;url=http://localhost/eucs_m/index.php?status=gagal&act=insert'>";
}
?>