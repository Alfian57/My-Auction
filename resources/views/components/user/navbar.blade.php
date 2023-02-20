<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="/assets/img/my-auction-full.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#barang">Barang</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="post" class="pt-2">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
