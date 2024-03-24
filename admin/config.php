<?php
if (isset($_GET['pages']))
{
    if ($_GET['pages'] == "dashboard")
    {
        include 'dashboard.php';
    }
    elseif ($_GET['pages'] == "barang")
    {
        include 'barang.php';
    }
    elseif ($_GET['pages'] == "tambah-barang")
    {
        include 'tambah-barang.php';
    }
    elseif ($_GET['pages'] == "ubah-barang")
    {
        include 'ubah-barang.php';
    }
    elseif ($_GET['pages'] == "hapus-barang")
    {
        include 'hapus-barang.php';
    }
    elseif ($_GET['pages'] == "tambah-kategori")
    {
        include 'tambah-kategori.php';
    }
    elseif ($_GET['pages'] == "pelanggan")
    {
        include 'pelanggan.php';
    }
    elseif ($_GET['pages'] == "order")
    {
        include 'order.php';
    }
    elseif ($_GET['pages'] == "detail-order")
    {
        include 'detail-order.php';
    }
    elseif ($_GET['pages'] == "pembayaran")
    {
        include 'pembayaran.php';
    }
    elseif ($_GET['pages'] == "artikel")
    {
        include 'artikel.php';
    }
    elseif ($_GET['pages'] == "tambah-artikel")
    {
        include 'tambah-artikel.php';
    }
    elseif ($_GET['pages'] == "kategori-artikel")
    {
        include 'kategori-artikel.php';
    }
    elseif ($_GET['pages'] == "ubah-artikel")
    {
        include 'ubah-artikel.php';
    }
    elseif ($_GET['pages'] == "logout")
    {
        include 'logout.php';
    }
    elseif ($_GET['pages'] == "service")
    {
        include 'service.php';
    }
    elseif ($_GET['pages'] == "tambah-service")
    {
        include 'tambah-service.php';
    }
    elseif ($_GET['pages'] == "ubah-service")
    {
        include 'ubah-service.php';
    }
    elseif ($_GET['pages'] == "hapus-service")
    {
        include 'hapus-service.php';
    }
    elseif ($_GET['pages'] == "order-service")
    {
        include 'order-service.php';
    }
    elseif ($_GET['pages'] == "laporanview")
    {
        include 'laporanview.php';
    }
    elseif ($_GET['pages'] == "cetak")
    {
        include 'cetak.php';
    }
    elseif ($_GET['pages'] == "detail-order-service")
    {
        include 'detail-order-service.php';
    }
    elseif ($_GET['pages'] == "pembayaran-service")
    {
        include 'pembayaran-service.php';
    }
    
}
else
{
    include 'dashboard.php';
}
?>
