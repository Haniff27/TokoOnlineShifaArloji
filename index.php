<?php
header('Content-Type:text/html;charset=utf-8'); ?><?php require "header.php"; ?>
<style>
    .carousel li {
        margin-bottom: 80px;
    }

    .carousel-caption {
        margin-bottom: 250px;
    }

    .filters {
        margin-top: -50px;
    }

    .filters .filter-box {
        width: 100%;
        height: auto;
        border-radius: 10px;
        background-color: rgb(231, 231, 231);
        box-shadow: 0 4px 8px 0 rgba(98, 98, 98, 0.8), 0 6px 20px 0 rgba(100, 100, 100, 0.6);
        position: relative;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-"] {
        padding-left: 3px;
        padding-right: 3px;
        margin-bottom: 6px;
    }

    .banner .img {
        width: 100%;
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        background-color: rgb(41, 41, 41, 0.7);
    }

    #box,
    #box-b {
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    #box::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 15px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box-b::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 25px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box:hover::after,
    #box-b:hover::after {
        top: 75%;
    }

    .item:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 3px 10px 0 rgba(0, 0, 0, 0.4);
    }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="assets/img/aa1.jpg" alt="First slide" width="100%" height="615px">
            <div class="carousel-caption ">
                <!-- <h1 class="font-weight-bold">WELCOME</h1>
                <h4>To My Website</h4> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="assets/img/aa2.jpg" alt="Second slide" width="100%" height="615px">
            <div class="carousel-caption">
                <!-- <h3>New York</h3>
                    <p>We love the Big Apple!</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="assets/img/aa3.jpg" alt="Third slide" width="100%" height="615px">
            <div class="carousel-caption">
                <!-- <h3>New York</h3>
                    <p>We love the Big Apple!</p> -->
            </div>
        </div>

    </div>
    <div class="aaa">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="filters">
    <div class="container filter-box">
        <div class="row pt-4">
            <div class="col-12">
                <form action="">
                    <div class="input-group">
                        <input class="form-control" width="100%" type="text" name="select" placeholder="Search" style="border-radius: 4px;">
                        <span class="input-group-btn ml-2">
                            <button class="btn btn-primary pl-5 pr-5" type="submit" name="cari" id="addressSearch">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</div>

<!-- /.container -->
<div class="container mt-5 bg-white rounded">
    <div class="atas">
        <div class="row mb-4">
            <div class="col-12 text-secondary">
                <?php
                if (isset($_GET['select'])) {
                    $cari = $_GET['select'];
                    echo "<h4><i>Hasil pencarian : " . $cari . "</i></h4>";
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <?php
            if (isset($_GET['select'])) {
                $cari = $_GET['select'];
                $query = "SELECT * FROM tbl_artikel WHERE judul LIKE '%" . $cari . "%'ORDER BY id_artikel desc";
                $result = mysqli_query($db, $query);
                while ($data = mysqli_fetch_assoc($result)) {
                    $tgl = $data['tgl'];
                    $kalimat = $data['isi'];
                    $huruf_maksimal = 110;
                    $hasil = substr($kalimat, 0, $huruf_maksimal);
            ?>
                    <div class="col-md-6 p-3">
                        <div class="">
                            <img src="admin/assets/images/foto_artikel/<?php echo $data['gambar']; ?>" height="320px" width="100%" alt="...">
                        </div>
                        <h5 class="mt-2">
                            <a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>" class="font-weight-bold text-dark" style="text-decoration: none;"><?php echo $data['judul']; ?></a>
                        </h5>
                        <hr align="left" class="mb-1" style="width: 20%;">
                        <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i>
                            <?php echo date("F d, Y", strtotime($tgl)); ?>
                        </p>
                        <div class="text-justify"><?php echo $hasil . ' . . .'; ?></div>
                    </div>
            <?php }
            } ?>
        </div>
        <div class="barang">
        <div class="test1 container mt-5" style="border-radius: 7px;">
            <div class="row">
                <div class="col text-center">
                    <h3><span class="text-primary">BARANG </span>TERBARU</h3>
                </div>
            </div>
            <div class="test2 row">
                <div class="owl-carousel owl-theme" style="padding: 0;">
                    <?php
                    $query = "SELECT * FROM tbl_barang";
                    $result = mysqli_query($db, $query);
                    while ($barang = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col" width="250px" style="margin: 0px; padding: 5px;">
                            <div class="item card ">
                                <div class="thumnail">
                                    <img src="admin/assets/images/foto_barang/<?php echo $barang['gambar']; ?>" alt="img" class="card-img-top pt-2">
                                    <div class="star-rating" style="position: absolute; top:7px; right: 10px; font-size: 10px;">
                                        <ul class="list-inline text-warning">
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong><?php echo $barang['nm_barang']; ?></strong></br>
                                    <h6 class="text-danger">Rp. <?php echo number_format($barang['harga']); ?></h6>
                                    <a href="detail-barang.php?id=<?php echo $barang['id_barang']; ?>" class="btn btn-primary btn-sm btn-block">Lihat Barang</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="test1 container mt-5" style="border-radius: 7px;">
            <div class="row">
                <div class="col text-center">
                    <h3><span class="text-primary">JASA </span>SERVICE</h3>
                </div>
            </div>
            <div class="test2 row">
                <div class="owl-carousel owl-theme" style="padding: 0;">
                    <?php
                    $query = "SELECT * FROM tbl_service";
                    $result = mysqli_query($db, $query);
                    while ($service = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col" width="250px" style="margin: 0px; padding: 5px;">
                            <div class="item card ">
                                <div class="thumnail">
                                    <img src="admin/assets/images/foto_service/<?php echo $service['gambar']; ?>" alt="img" class="card-img-top pt-2">
                                    <div class="star-rating" style="position: absolute; top:7px; right: 10px; font-size: 10px;">
                                        <ul class="list-inline text-warning">
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <strong><?php echo $service['nm_service']; ?></strong></br>
                                    <h6 class="text-danger">Rp. <?php echo number_format($service['harga']); ?></h6>
                                    <a href="detail-service.php?id=<?php echo $service['id_service']; ?>" class="btn btn-primary btn-sm btn-block">Lihat Service</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col text-center">
                <h3><span class="text-primary">ARTIKEL </span>TERBARU</h3>
                <p></p>
            </div>
        </div>
        <div class="row">
            <?php
            $query = "SELECT * FROM tbl_artikel ORDER BY id_artikel desc LIMIT 8";
            $result = mysqli_query($db, $query);
            while ($data = mysqli_fetch_array($result)) {
                $judul = $data['judul'];
                $judul_maksimal = 30;
                $hasil2 = substr($judul, 0, $judul_maksimal);
            ?>
                <div class="col-md-3 col-sm-6 col-xs-6" id="box" data-text="<?php echo $hasil2 . ' . . .'; ?>">
                    <a href="detail-blog.php?id=<?php echo $data['id_artikel'] ?>"><img src="admin/assets/images/foto_artikel/<?php echo $data['gambar']; ?>" height="200px" width="100%"></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div> 
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    })
</script>
<?php require "footer.php"; ?>