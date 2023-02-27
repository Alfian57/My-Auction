<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>My Auction | Home</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="/assets/img/my-auction-logo.png">

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="assets/user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/user/css/lineicons.css" />
    <link rel="stylesheet" href="assets/user/css/animate.css" />
    <link rel="stylesheet" href="assets/user/css/main.css" />
</head>

<body>
    @include('sweetalert::alert')
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
            <h3 class="text-center mb-5">List Lelang</h3>
            <div class="row justify-content-center">
                @foreach ($lelang as $item)
                    {{-- Tawar Modal --}}
                    <div class="modal fade" id="tawarModal{{ $item->id_15458 }}" tabindex="-1"
                        aria-labelledby="tawarModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Penawaran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form
                                        action="{{ route('penawaran', ['idLelang' => $item->id_15458, 'idBarang' => $item->barang->id_15458]) }}"
                                        method="post">
                                        @csrf
                                        <h4 class="mb-3">Nominal Penawaran</h4>
                                        <input type="number" id="penawaran_15458" class="form-control"
                                            min="{{ $min[$loop->index] }}" placeholder="Masukan Nominal"
                                            name="penawaran_15458">
                                        <label>Mininal Penawaran:
                                            <span class="text-primary">{{ $min[$loop->index] }}</span>
                                        </label>
                                        <button type="submit" class="btn btn-success mt-3 float-end">Tawar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- History Modal --}}
                    <div class="modal fade" id="tawarHistory{{ $item->id_15458 }}" tabindex="-1"
                        aria-labelledby="tawarModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Riwayat Penawaran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>Nama Penawaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($item->historyLelang as $subItem)
                                                    <tr>
                                                        <td>{{ $subItem->masyarakat->nama_15458 }}</td>
                                                        <td>{{ $subItem->penawaran_15458 }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" class="btn btn-danger float-end"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-md-4 rounded rounded-3 pt-3" style="background-color: #9FA8F6">
                        <img src="{{ asset('storage/' . $item->barang->image_15458) }}" class="card-img-top rounded"
                            alt="{{ $item->barang->nama_15458 }} Image">
                        <div class="card-body">
                            <h5 class="card-title text-white">{{ $item->barang->nama_15458 }}</h5>
                            <p class="card-text my-3 text-white">{{ $item->barang->deskripsi_15458 }}</p>
                            <div class="row justify-content-center">
                                <a href="#" class="btn btn-primary col-md-5 mx-1 my-3" data-bs-toggle="modal"
                                    data-bs-target="#tawarHistory{{ $item->id_15458 }}">Riwayat</a>
                                <a href="#" class="btn btn-success col-md-5 mx-1 my-3" data-bs-toggle="modal"
                                    data-bs-target="#tawarModal{{ $item->id_15458 }}">Tawar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $lelang->links() }}
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
