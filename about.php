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

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>ABOUT US</h3>
            <p>Home > <a href="#">About Us</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pt-4 pb-4">
    <div class="row no-gutter">
        <div class="col-sm-8 text-justify">
            <h4>ABOUT US SHIFA ARLOJI</h4>
            <p>Selamat datang di Toko Shifa Arloji. Shifa Arloji merupakan sebuah toko retail
                yang menjual berbagai keperluan accesories jam tangan, jam dinding, onderdil jam dan menerima jasa service jam tangan.
                yang beralamat di Jl. Pasar Baru Bogor Tengah Kota Bogor.
            </p>

        </div>
        <div class="col-sm-4">
            <img src="assets/img/bg_about.jpeg" height="300px" width="100%">
        </div>
    </div>
</div>
<?php require "footer.php"; ?>