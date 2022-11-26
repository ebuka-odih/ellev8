
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User Dashboard</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Mystic styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">



<!-- Setting Panel -->
<div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-paint"></i>
</div>


<!-- Preloader -->
<div id="preloader-wrap" style="background-color:#274E82">

    <div class="spinner spinner-8">


        <div class="ms-circle1 ms-child"></div>
        <div class="ms-circle2 ms-child"></div>
        <div class="ms-circle3 ms-child"></div>
        <div class="ms-circle4 ms-child"></div>
        <div class="ms-circle5 ms-child"></div>
        <div class="ms-circle6 ms-child"></div>
        <div class="ms-circle7 ms-child"></div>
        <div class="ms-circle8 ms-child"></div>
        <div class="ms-circle9 ms-child"></div>
        <div class="ms-circle10 ms-child"></div>
        <div class="ms-circle11 ms-child"></div>
        <div class="ms-circle12 ms-child"></div>
    </div>
</div>

<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left"  style="background-color:#274E82">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg" style="background-color:#fff">
        <a class="pl-0 ml-0 text-center" href="index.php" style="color:White;font-size:20px;font-weight:bolder">
{{--            <img src='https://www.speedexcapitals.net/logo.png' style='width:250px'/>--}}
        </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion" style="background-color:#274E82">

        <li class="menu-item" style="padding-bottom:8px">
            <a href="{{ route('index') }}">
                <span style="color:white"><i class="fa fa-home" style="font-size:17px"></i>Dashboard</span>
            </a>
        </li>


        <li class="menu-item" style="padding-bottom:8px">
            <a href="LIVE-trading.php">
                <span style="color:white"><i class="fa fa-window-maximize" style="font-size:17px"></i>Live Trading</span>
            </a>
        </li>


        <li class="menu-item" style="padding-bottom:8px">
            <a href="signal.php">
                <span style="color:white"><i class="fa fa-window-maximize" style="font-size:17px"></i>Live Trading Signals</span>
            </a>
        </li>



        <li class="menu-item" style="padding-bottom:8px">
            <a href="account.php">
                <span style="color:white"><i class="fa fa-user-circle" style="font-size:17px"></i>Account Profile</span>
            </a>
        </li>

        <li class="menu-item" style="padding-bottom:8px">
            <a href="deposit.php">
                <span style="color:white"><i class="fa fa-credit-card" style="font-size:17px"></i>  Make Deposits</span>
            </a>
        </li>


        <li class="menu-item" style="padding-bottom:8px">
            <a href="tradehistory.php">
                <span style="color:white"><i class="fa fa-clock" style="font-size:17px"></i>  Trade History</span>
            </a>
        </li>

        <li class="menu-item" style="padding-bottom:8px">
            <a href="withdraw.php">
                <span style="color:white"><i class="fa fa-suitcase" style="font-size:17px"></i>  Withdrawals</span>
            </a>
        </li>

        <li class="menu-item" style="padding-bottom:8px">
            <a href="support.php">
                <span style="color:white"><i class="fa fa-envelope" style="font-size:17px"></i> Our Support</span>
            </a>
        </li>



        <li class="menu-item" style="padding-bottom:8px;">
            <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span style="color:white;text-align:Center"> Log Out</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>


        <!-- /Apps -->
    </ul>


</aside>



<!-- Main Content -->
@yield('content')

<!-- Quick bar -->
<aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg" style="background-color:#262626">


    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Chat With Us">


    </div>




    </div>

</aside>

<!-- MODALS -->




<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.js') }}"> </script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src="{{ asset('assets/js/slick.min.js') }}"> </script>
<script src="{{ asset('assets/js/moment.js') }}"> </script>
<script src="{{ asset('assets/js/jquery.webticker.min.js') }}"> </script>
<script src="{{ asset('assets/js/Chart.bundle.min.js') }}"> </script>
<script src="{{ asset('assets/js/Chart.Financial.js') }}"> </script>
<script src="{{ asset('assets/js/cryptocurrency.js') }}"> </script>
<!-- Page Specific Scripts Finish -->

<!-- Mystic core JavaScript -->
<script src="{{ asset('assets/js/framework.js') }}"></script>

<!-- Settings -->
<script src="{{ asset('assets/js/settings.js') }}"></script>

</body>

</html>
