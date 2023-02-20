<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/dashboard/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/dashboard/img/favicon.png">
    <title>
        My Auction | {{ $title }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/dashboard/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body>
    @include('sweetalert::alert')

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('components.auth.navbar')
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                @yield('content')
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('/assets/dashboard/img/curved-images/curved6.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/assets/dashboard/js/core/popper.min.js"></script>
    <script src="/assets/dashboard/js/core/bootstrap.min.js"></script>
</body>

</html>
