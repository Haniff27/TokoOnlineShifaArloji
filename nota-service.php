<?php require "header.php"; ?>

<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/bg1.jpeg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;
    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }
</style>
<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>Nota Service</h3>
            <p>Home ><a href="#"> Nota Service</a></p>
        </div>
    </div>
</div>
<div class="containt">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h4 class="pull-right font-16"><strong>ID Order : <?php echo $_GET['id']; ?>
                                        </strong></h4>
                                    <h3 class="m-t-0">
                                        <strong> NOTA SERVICE</strong>
                                    </h3>
                                    <a class=" navbar-brand" href="#">
                                     <img src="assets/img/icon/toko.png" width="200" height="60" alt=""></a>
                                </div>
                                <hr>
                                <div class="row">
                                    <?php
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM tbl_order_service WHERE id_orderservice='$id'";
                                    $result = mysqli_query($db, $query);
                                    $data = mysqli_fetch_assoc($result);
                                    $tgl = $data['tgl_order'];
                                    ?>
                                    <div class="col-6">
                                        <address>
                                            <strong>Pelanggan :</strong><br>
                                            <?php echo $data['nm_pelanggan']; ?> <br>
                                            <br>
                                            <strong>No Handphone :</strong><br>
                                            <?php echo $data['telp']; ?>
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong>Alamat :</strong><br>
                                            <?php echo $data['alamat']; ?>
                                            <br>
                                            <br>
                                            <strong>Status :</strong><br>
                                            <?php echo $data['status']; ?>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 m-t-30">
                                        <address>
                                            <strong>Tanggal Order:</strong><br>
                                            <?php echo date("F d, Y", strtotime($tgl)); ?>
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong>Tgl Deadline :</strong><br>
                                            <?php echo $data['deadline']; ?>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="panel panel-default">
                                    <div class="pt-3">
                                        <h3 class="panel-title font-20">Rincian Order</strong>
                                        </h3>
                                    </div>
                                    <div class="">
                                        <div class="table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Gambar</th>
                                                        <th>Service</th>
                                                        <th>Harga</th>
                                                        <th class="text-center">Jumlah</th>
                                                        <th class="text-right">Subharga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $id_order = $_GET['id'];
                                                    $order = "SELECT ongkir,total_order FROM tbl_order_service WHERE id_orderservice='$id_order'";
                                                    $res = mysqli_query($db, $order);
                                                    $dta = mysqli_fetch_assoc($res);

                                                    $subtotal = 0;
                                                    $qservice = "SELECT * FROM tbl_detail_service d JOIN tbl_service p ON d.id_service=p.id_service WHERE id_orderservice = '$id_order'";
                                                    $rservice = mysqli_query($db, $qservice);
                                                    while ($service = mysqli_fetch_assoc($rservice)) {
                                                    ?>
                                                        <tr>
                                                            <td class="product-list-img">
                                                                <?php if ($service['gambar'] != null) : ?>
                                                                    <img width="110" src="admin/assets/images/foto_service/<?php echo $service['gambar'] ?>" class="img-fluid" alt="tbl">
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php echo $service['nm_service']; ?></td>
                                                            <td>Rp. <?php echo number_format($service['harga']); ?></td>
                                                            <td class="text-center"><?php echo $service['jml_order']; ?> </td>
                                                            <td class="text-right">Rp.
                                                                <?php echo number_format($service['subharga']); ?></td>
                                                        </tr>
                                                    <?php
                                                        $subtotal += $service['subharga'];
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td colspan="3" "></td>
                                                        <th class=" text-center">
                                                            Subtotal
                                                            </th>
                                                        <td class="text-right">Rp.<?php echo number_format($subtotal); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" style="border-top: none;"></td>
                                                        <th class="text-center" style="border-top: none;">Ongkir</th>
                                                        <td class="text-right" style="border-top: none;">Rp.<?php echo number_format($dta['ongkir']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" style="border-top: none;"></td>
                                                        <th class="text-center" style="border-top: none;">Total</th>
                                                        <td class="text-right" style="border-top: none;">
                                                            <h4>Rp.<?php echo number_format($dta['total_order']); ?></h4>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-print-none">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
<?php require "footer.php"; ?>