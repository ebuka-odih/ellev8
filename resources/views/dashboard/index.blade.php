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
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(5deg, #30345c, #2ca26c);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Deposits</h6>
                                <p class="ms-card-change"  style="color:white"> <img src="{{ asset('img/money-bag-with-dollar-symbol.svg') }}" style="width:20px"> ${{ $deposits ? : "0.00" }}</p>
                                <p class="fs-12" style='color:#fff'>Stats - <b style='padding:3px;border-radius:5px' class=' btn-danger'>Pending Transaction</b></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(10deg, #23272D, #23272D);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Balance</h6>
                                <p class="ms-card-change"  style="color:white"> <img src="{{ asset('img/money-bag-with-dollar-symbol.svg') }}" style="width:20px">
                                    ${{ $user->balance ? : "0.00" }}</p>
                                <p class="fs-12" style='color:#fff'>Stats</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-12 col-md-12">
                    <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, #23272D, #23272D);border:none">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="color:white">Profit</h6>
                                <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:#ff6666">arrow_upward</i> ${{ $user->balance ? : "0.00" }}</p>
                                <p class="fs-12" style='color:#fff'>Stats</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



            <div class="col-xs-12 col-md-12" style="height:auto">


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
                                    <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:white">arrow_upward</i>
                                        ${{ $credit ? : "0.00" }} </p>
                                    <p class="fs-12" style='color:#fff'>Stats</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-4 col-md-6">
                        <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, #2f3640, #FF5757);border:none">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="color:white">Withdrawal</h6>
                                    <p class="ms-card-change"  style="color:white"> <i class="material-icons"  style="color:white">arrow_upward</i> ${{ $withdrawal ? : "0.00" }}</p>
                                    <p class="fs-12" style='color:#fff'>Stats</p>
                                </div>
                            </div>
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
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


@endsection
