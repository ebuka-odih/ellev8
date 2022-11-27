@extends('dashboard.layout.app')
@section('content')



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


@endsection
