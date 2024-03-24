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


    .atas .card {
        padding: 1px;
        border: 1px solid silver;
    }

    .atas .card:hover {
        border: none;
    }

    .item:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
    }
</style>

<div class="banner mb-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>SERVICE</h3>
            <p>Home > <a href="#">SERVICE</a></p>
        </div>
    </div>
</div>
<div class="container">
            <div class="row">
                <?php
				$query = "SELECT * FROM tbl_service";
                $result = mysqli_query($db, $query);
                while ($service = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="mb-0 p-1 col-md-6 col-lg-4 col-xl-3">
                        <div class="item card">
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
                                <a href="detail-service.php?id=<?php echo $service['id_service']; ?>" class="btn btn-primary btn-sm btn-block">Lihat Barang</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>