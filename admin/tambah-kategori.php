<?php
    include "../koneksi.php";
?>
<!-- Lihat Data barang -->
<?php
if (isset($_GET['id']))
{
    //mengambil id barang
    $id = $_GET['id'];
    //menghapus data
    $queryHapus = "DELETE FROM tbl_kat_barang WHERE id_kategori='$id'";
    $execHapus = mysqli_query($db, $queryHapus);

    if ($execHapus)
    {
        //menampilkan pesan dan redirec ke halaman barang
        echo "<script>alert('Kategori sudah dihapus');</script>";
        echo "<script>location='index.php?pages=tambah-kategori';</script>";
    }
}
?>
<div class="row">
    <div class="col-6">
        <div class="card m-b-20">
        <div class="card-header">
                <h5>KATEGORI BARANG</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productname">Nama Kategori</label>
                                <input id="productname" name="nama" type="text" class="form-control"></div>
                        </div>
                    </div>
                    <button class="btn btn-success waves-effect waves-light" name="tambah">Tambah</button>
                </form>
                <?php
                    if(isset($_POST['tambah'])){
                        $db->query("INSERT INTO tbl_kat_barang (nm_kategori) VALUES ('$_POST[nama]')");
                    }
                    
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card m-b-20">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="productname">Kategori barang</label><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php $ambil=$db->query("SELECT * FROM tbl_kat_barang"); ?>
                                    <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?php echo $pecah['nm_kategori'] ?></td>
                                        <td>
                                            <a href="index.php?pages=tambah-kategori&id=<?php echo $pecah['id_kategori']; ?>"
                                                class="text-muted" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus Kategori tersebut?')"><i
                                                    class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>