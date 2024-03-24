<?php 
require "../koneksi.php";

$query = "SELECT COUNT(*) AS jml FROM tbl_order";
$result = mysqli_query($db,$query);
$totalOrder = mysqli_fetch_array($result);

$query1 = "SELECT COUNT(*) AS jml FROM tbl_order WHERE status='Belum Dibayar'";
$result1 = mysqli_query($db,$query1);
$blmDibayar = mysqli_fetch_array($result1);

$query2 = "SELECT COUNT(*) AS jml FROM tbl_order WHERE status='Sudah Dibayar'";
$result2 = mysqli_query($db,$query2);
$sudahDibayar = mysqli_fetch_array($result2);

$query3 = "SELECT COUNT(*) AS jml FROM tbl_order WHERE status='Menyiapkan Barang'";
$result3 = mysqli_query($db,$query3);
$menyiapkanBarang = mysqli_fetch_array($result3);

$query4 = "SELECT COUNT(*) AS jml FROM tbl_order WHERE status='Barang Dikirim'";
$result4 = mysqli_query($db,$query4);
$barangDikirm = mysqli_fetch_array($result4);

$query5 = "SELECT COUNT(*) AS jml FROM tbl_order WHERE status='Barang Diterima'";
$result5 = mysqli_query($db,$query5);
$diterima = mysqli_fetch_array($result5);

?>