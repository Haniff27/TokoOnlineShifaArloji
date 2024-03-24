<?php require "koneksi.php"; 
$id=$_GET['id'];
$query="UPDATE tbl_order SET status='Barang Diterima' WHERE id_order='$id'";
$result=mysqli_query($db,$query); 

echo "<script>location='orderan.php';</script>";
echo "Ba";
?>