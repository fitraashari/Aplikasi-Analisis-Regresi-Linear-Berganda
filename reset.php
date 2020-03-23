<?php
		include "koneksi.php";

//$conn = mysqli_connect($host,$user,$pass,$db);
//mysqli_query("SET AUTOCOMMIT=0");
//mysqli_query("START TRANSACTION");
$clearx1= mysqli_query($conn,"TRUNCATE TABLE x1");
$clearx2= mysqli_query($conn,"TRUNCATE TABLE x2");
$clearx3= mysqli_query($conn,"TRUNCATE TABLE x3");
$clearx4= mysqli_query($conn,"TRUNCATE TABLE x4");
$clearx5= mysqli_query($conn,"TRUNCATE TABLE x5");
$cleary= mysqli_query($conn,"TRUNCATE TABLE y");
if($clearx1 && $clearx2 && $clearx3 && $clearx4 && $clearx5 && $cleary){
//mysqli_query("COMMIT");
header("location:index.php?status=success&act=delete");
} else {
	//mysqli_query("ROLLBACK");
header("location:index.php?status=gagal&act=delete");
}
?>