<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        My Auction | {{ $title }}
    </title>

    <!--     Fonts and icons     -->
    <link rel="icon" href="/assets/img/my-auction-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="/assets/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/dashboard/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/dashboard/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

    {{-- Data tables --}}
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/plugins/DataTables/datatables.min.css" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('sweetalert::alert')

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#" target="_blank">
                <img src="/assets/img/my-auction-logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">My Auction</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        @include('components.dashboard.sidebar')
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('components.dashboard.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="/assets/dashboard/js/core/popper.min.js"></script>
    <script src="/assets/dashboard/js/core/bootstrap.min.js"></script>
    <script src="/assets/dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    {{-- <script src="/assets/dashboard/js/plugins/chartjs.min.js"></script> --}}

    {{-- Jquery --}}
    <script src="/assets/dashboard/plugins/jquery/jquery-3.6.3.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        $(document).ready(function() {
            $("#datatables").DataTable({
                paging: false,
            });
        });
    </script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    {{-- <script src="/assets/dashboard/js/soft-ui-dashboard.min.js?v=1.0.7"></script> --}}

    {{-- Datatables --}}
    <script type="text/javascript" src="/assets/dashboard/plugins/DataTables/datatables.min.js"></script>
</body>

</html>
