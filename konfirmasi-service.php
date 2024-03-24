<?php require "koneksi.php"; 
$id=$_GET['id'];
$query="UPDATE tbl_order_service SET status='Selesai' WHERE id_orderservice='$id'";
$result=mysqli_query($db,$query); 

echo "<script>location='orderan-service.php';</script>";
echo "Ba";
