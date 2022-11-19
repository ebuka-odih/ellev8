@extends('dashboard.layout.app')
@section('content')

<main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar" style="background-color:#fff">

        <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft" >
            <span class="ms-toggler-bar bg-primary" style="background-color:#4da3ff;height:3px"></span>
            <span class="ms-toggler-bar bg-primary" style="background-color:#4da3ff;height:3px"></span>
            <span class="ms-toggler-bar bg-primary" style="background-color:#4da3ff;height:3px"></span>
        </div>

        <div class="logo-sn logo-sm ms-d-block-sm">
            <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php">
                <img src='https://www.speedexcapitals.net/logo.png' style='width:250px;padding:7px'/>
            </a>
        </div>

        <ul class="offset-sm-6 ms-nav-list ms-inline mb-0" id="ms-nav-options"  >

            <li class="ms-nav-item ms-nav-user dropdown">


                <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#4da3ff;font-size:16px;padding-top:5px">Welcome
                    <b></b> &nbsp
                    <i class="fa fa-user-circle ms-user-img ms-img-round float-right" style="font-size:30px;color:#4da3ff;float:right"></i></a>



                <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-header">
                        <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled" style="color:black">Welcome, </span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-dropdown-list">
                        <a class="media fs-14 p-2" href="account.php"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
                        <a class="media fs-14 p-2" href="account.php"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
                        <a class="media fs-14 p-2" href="support.php"> <span><i class="flaticon-question mr-2"></i> Contact Us</span> </a>
                    </li>
                    <li class="dropdown-divider"></li>

                    <li class="dropdown-menu-footer">
                        <a class="media fs-14 p-2" href="../index.php?log=1"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
            <span class="ms-toggler-bar bg-primary" style="background-color:#000000"></span>
            <span class="ms-toggler-bar bg-primary" style="background-color:#000000"></span>
            <span class="ms-toggler-bar bg-primary" style="background-color:#000000"></span>
        </div>

    </nav>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">

            <!-- News Flash -->
























            <div class="col-sm-12" >
		   <span style='font-size:35px;color:black'> Welcome
 <b style='color:#4da3ff;text-decoration:underline'></b></span>
            </div>


            <div class='col-sm-12' ><p id="date" style='float:left;font-weight:normal;color:black;text-align:center'></p>.</div>
            <script>
                document.getElementById("date").innerHTML = Date();
            </script>








            <!-- Crypto Slider -->
            <div class="col-md-12">




                <div class="col-xl-12 col-md-12">
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(5deg, #274E82, #000066);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Deposits</h6>
                                <p class="ms-card-change"  style="color:white"> <img src="money-bag-with-dollar-symbol.svg" style="width:20px"> 0.00</p>
                                <p class="fs-12" style='color:#fff'>Stats - <b style='padding:3px;border-radius:5px' class=' btn-danger'>Pending Transaction</b></p>
                            </div>
                        </div>
                        <i class="flaticon-layers"  style="color:white"></i>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(10deg, #23272D, #23272D);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Balance</h6>
                                <p class="ms-card-change"  style="color:white"> <img src="money-bag-with-dollar-symbol.svg" style="width:20px"> 0.00 </p>
                                <p class="fs-12" style='color:#fff'>Stats</p>
                            </div>
                        </div>
                        <i class="flaticon-stats"></i>
                    </div>
                </div>


                <div class="col-xl-12 col-md-12">
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, #23272D, #23272D);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Profit</h6>
                                <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:#ff6666">arrow_upward</i> 0.00</p>
                                <p class="fs-12" style='color:#fff'>Stats</p>
                            </div>
                        </div>
                        <i class="flaticon-statistics"  style="color:white"></i>
                    </div>
                </div>
























































                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                            {
                                "title": "S&P 500",
                                "proName": "OANDA:SPX500USD"
                            },
                            {
                                "title": "Nasdaq 100",
                                "proName": "OANDA:NAS100USD"
                            },
                            {
                                "title": "EUR/USD",
                                "proName": "FX_IDC:EURUSD"
                            },
                            {
                                "title": "BTC/USD",
                                "proName": "BITSTAMP:BTCUSD"
                            },
                            {
                                "title": "ETH/USD",
                                "proName": "BITSTAMP:ETHUSD"
                            }
                        ],
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>



            <div class="col-xs-12 col-md-12" style="height:auto">

                <!-- TradingView Widget BEGIN -->
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "width": "auto",
                            "height": 610,
                            "symbol": "FX:EURUSD",
                            "timezone": "Etc/UTC",
                            "theme": "Dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "withdateranges": true,
                            "range": "all",
                            "allow_symbol_change": true,
                            "save_image": false,
                            "details": true,
                            "hotlist": true,
                            "calendar": true,
                            "news": [
                                "stocktwits",
                                "headlines"
                            ],
                            "studies": [
                                "BB@tv-basicstudies",
                                "MACD@tv-basicstudies",
                                "MF@tv-basicstudies"
                            ],
                            "container_id": "tradingview_f263f"
                        }
                    );
                </script>
                <!-- TradingView Widget END -->
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container ">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text"></span></span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": "100%",
                            "height": 400,
                            "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD",
                            "CNY"
                        ],
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->


            </div>
            <div class="ms-content-wrapper">
                <div class="row">


                    <div class="col-xl-4 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(500deg, #2f3640, #353b48);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="color:white">Credit</h6>
                                    <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:white">arrow_upward</i> 0.00 </p>
                                    <p class="fs-12" style='color:#fff'>Stats</p>
                                </div>
                            </div>
                            <i class="flaticon-statistics"  style="color:white"></i>
                        </div>
                    </div>



                    <div class="col-xl-4 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, #2f3640, #FF5757);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="color:white">Withdrawal</h6>
                                    <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:white">arrow_upward</i> 0.00</p>
                                    <p class="fs-12" style='color:#fff'>Stats</p>
                                </div>
                            </div>
                            <i class="flaticon-statistics"  style="color:white"></i>
                        </div>
                    </div>



                    <div class="col-xl-4 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, #FF5757, #353b48);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="color:white">Account Manager</h6>
                                    <p class="ms-card-change"  style="color:white;padding:5px"> <i class="material-icons"  style="color:white">arrow_upward</i>

                                    </p>
                                    <p class="fs-12" style='color:#fff'>Stats</p>
                                </div>
                            </div>
                            <i class="flaticon-user"  style="color:white"></i>
                        </div>
                    </div>



                    <div class="col-xl-12 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(10deg, #2f3640, #353b48);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="color:white">Trading Percentage</h6>
                                    <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:white">arrow_upward</i> %</p>
                                    <p class="fs-12">Stats</p>
                                </div>
                            </div>
                            <i class="flaticon-pie-chart"  style="color:white"></i>
                        </div>
                    </div>





                    <div class="col-xl-12 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(10deg, #23272D, #23272D);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body"><br>
                                    <h4 style="color:white;font-size:23px">My Referrals</h4>

                                </div>
                                <style>
                                    table {
                                        font-family: arial, sans-serif;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    td, th {
                                        border: 1px solid #dddddd;
                                        text-align: left;
                                        padding: 8px;
                                    }

                                    tr:nth-child(even) {
                                        background-color: #dddddd;
                                    }
                                </style>
                            </div>

                            <table>
                                <tr style="background-color:white">
                                    <th>Fullname</th>
                                    <th>Username</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>










            </div>
        </div>






    </div>
    </div>

</main>

@endsection
