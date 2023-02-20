<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>My Auction | Home</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/user/img/favicon.png" />

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="assets/user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/user/css/lineicons.css" />
    <link rel="stylesheet" href="assets/user/css/animate.css" />
    <link rel="stylesheet" href="assets/user/css/main.css" />
</head>

<body>
    @include('components.user.preloader')
    @include('components.user.navbar')

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            My Auction
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Temukan barang impianmu dengan harga terbaik di Go-Auction. Lelang mudah,
                            transparan, dan terpercaya. Nikmati proses lelang yang menyenangkan dan dapatkan
                            harga terbaik bagi barang yang Anda inginkan. Ayo bergabung dan raih kesempatanmu
                            sekarang!
                        </p>
                        <a href="#barang" class="main-btn border-btn btn-hover wow fadeInUp"
                            data-wow-delay=".6s">Belanja Sekarang</a>
                        <a href="#features" class="scroll-bottom">
                            <i class="lni lni-arrow-down"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 row">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/user/img/hero/hero-img.png" alt=""
                            style="width: 1000px; margin-left: -150px; margin-top: -110px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== barang-section start ======== -->
    <section id="barang" class="feature-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($lelang as $item)
                    <div class="card col-md-4 rounded rounded-3 pt-3" style="background-color: #9FA8F6">
                        <img src="{{ asset('storage/' . $item->barang->image_15458) }}" class="card-img-top rounded"
                            alt="{{ $item->barang->nama_15458 }} Image">
                        <div class="card-body">
                            <h5 class="card-title text-white">{{ $item->barang->nama_15458 }}</h5>
                            <p class="card-text my-3 text-white">{{ $item->barang->deskripsi_15458 }}</p>
                            <div class="row justify-content-center">
                                <a href="#" class="btn btn-primary col-md-5 mx-1 my-3">History</a>
                                <a href="#" class="btn btn-success col-md-5 mx-1 my-3">Tawar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== subscribe-section start ======== -->
    <section id="contact" class="subscribe-section pt-120">
        <div class="container">
            <div class="subscribe-wrapper img-bg">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title mb-15">
                            <h2 class="text-white mb-25">Berlangganan</h2>
                            <p class="text-white pr-5">
                                Dapatkan informasi terbaru dan penawaran menarik langsung di kotak masuk Anda.
                                Berlangganan email kami sekarang!
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form action="#" class="subscribe-form">
                            <input type="email" name="subs-email" id="subs-email" placeholder="Masukan Email" />
                            <button type="submit" class="main-btn btn-hover">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== subscribe-section end ======== -->

    <!-- ======== footer start ======== -->
    <footer class="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-30">
                                <a href="#">
                                    <img src="assets/img/my-auction-full.png" alt="" class="img-fluid w-75">
                                </a>
                            </div>
                            <p class="desc mb-30 text-white">
                                Selamat datang di Go-Auction, tempat dimana Anda dapat memenangkan barang
                                impianmu dengan harga terbaik. Kami adalah platform lelang online yang menawarkan proses
                                lelang
                                yang mudah, transparan, dan terpercaya. Dengan interface yang user-friendly dan proses
                                bid yang
                                lancar, Anda dapat memantau barang yang Anda incar tanpa harus terus menerus online.
                                Bergabunglah dengan kami sekarang dan raih kesempatanmu!
                            </p>
                            <ul class="socials">
                                <li>
                                    <a href="#">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 offset-xl-1 offset-lg-1 col-md-6">
                        <div class="footer-widget">
                            <h3>Tentang Website Ini</h3>
                            <ul class="links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Barang</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Semua Fitur</h3>
                            <ul class="links">
                                <li><a href="">Penjualan Barang Lelang</a></li>
                                <li><a href="">Pembelian Barang Lelang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="assets/user/js/bootstrap.bundle.min.js"></script>
    <script src="assets/user/js/wow.min.js"></script>
    <script src="assets/user/js/main.js"></script>
</body>

</html>
