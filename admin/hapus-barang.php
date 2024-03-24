<!-- Lihat Data barang -->
<?php
	$query = "SELECT * FROM tbl_barang JOIN tbl_kat_barang ON tbl_barang.id_kategori=tbl_kat_barang.id_kategori";
    $result = mysqli_query($db, $query);
?>

<!-- Hapus Data barang -->
<?php
if (isset($_GET['id']))
{
    //mengambil id barang
    $id = $_GET['id'];
    //memilih data table dengan id yang sudah di ambil
    $query2 = "SELECT * FROM tbl_barang Where id_barang = '$id'";
    $exec = mysqli_query($db, $query2);
    //mengubah data menjadi array
    $barang2 = mysqli_fetch_array($exec);
    //menghapus gambar
    $gambar = $barang2['gambar'];
    if (file_exists("assets/images/foto_barang/$gambar"))
    {
        unlink("assets/images/foto_barang/$gambar");
    }
    //menghapus data
    $queryHapus = "DELETE FROM tbl_barang WHERE id_barang='$id'";
    $execHapus = mysqli_query($db, $queryHapus);

    if ($execHapus)
    {
        //menampilkan pesan dan redirec ke halaman barang
        echo "<script>alert('barang sudah dihapus');</script>";
        echo "<script>location='index.php?pages=barang';</script>";
    }
}
?>