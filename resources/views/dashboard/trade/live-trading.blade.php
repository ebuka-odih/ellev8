@extends('dashboard.layout.app')
@section('content')

    <div class="ms-content-wrapper" style="background-color:white">
        <div class="row" style="background-color:white;border-radius:10px">

            <!-- News Flash -->

            <div class="col-sm-12">
		   <span style="font-size:35px;color:black"> Welcome To Live Trading
 <b style="color:#4da3ff;text-decoration:underline"></b></span>
            </div>



            <div class="col-sm-12"><p id="date" style="float:left;font-weight:normal;color:black;text-align:center">Sun Nov 27 2022 04:32:38 GMT+0100 (West Africa Standard Time)</p>.</div>
            <script>
                document.getElementById("date").innerHTML = Date();
            </script>


            <!-- Crypto Slider -->
            <div class="col-md-12">
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

                <div class="modal fade" id="modal-11" tabindex="-1" role="dialog" aria-labelledby="modal-10">
                    <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                        <div class="modal-content">

                            <div class="modal-body text-center"><h3 class="text-danger">SELL ORDER</h3>     <hr>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                                <form role="form" method="post" action="{{ route('user.sellOrder') }}">
                                    @csrf
                                    <input type="hidden" name="order" value="BUY">
                                    <div class="row">

                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Volume</label>
                                                <input type="number" class="form-control" name="amount" placeholder="Amount to buy" value="" step="any" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 px-md-1">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" name="type">
                                                    <option value="Market Execution">Market Execution</option>
                                                    <option value="Pending Order">Pending Order</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Symbol</label>
                                                <select name="symbol" class="form-control">
                                                    <option value="EURUSD ">EURUSD , Euro vs United state Dollar</option>
                                                    <option value="USDJPY">USDJPY, UNITED STATE DOLLAR VS JAPANESE YEN</option>
                                                    <option value="GBPUSD">GBPUSD, GREAT BRITAIN POUNDS VS UNITED STATE DOLLAR</option>
                                                    <option value="USDCAD">USDCAD, UNITED STATE DOLLAR VS CANADIAN DOLLAR</option>
                                                    <option value="USDCHF">USDCHF, UNITED STATE DOLLAR VS SWISS FRANC</option>
                                                    <option value="NZDUSD">NZDUSD, NEW ZEALAND DOLLAR VS UNITED STATE DOLLAR</option>
                                                    <option value="AUDUSD">AUDUSD, AUSTRALIAN DOLLAR VS UNITED STATE DOLLAR</option>
                                                    <option value="AUDNZD">AUDNZD, AUSTRALIAN DOLLAR VS NEW ZEALAND DOLLAR</option>
                                                    <option value="AUDCAD">AUDCAD, AUSTRALIAN DOLLAR VS CANADIAN DOLLAR</option>
                                                    <option value="AUDCHF">AUDCHF, AUSTRALIAN DOLLAR VS SWISS FRANC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Stop Loss <b>(SL)</b></label>
                                                <input type="number" name="sl" class="form-control" min="0" value="0.0000" step="any" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-md-1">
                                            <div class="form-group">
                                                <label>Take Profit <b>(TP)</b></label>
                                                <input type="number" name="tp" class="form-control" min="0" value="0.0000" step="any" required="">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" name="sell" class="btn btn-block btn-danger btn-lg " value="Sell by Market">
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10">
                    <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                        <div class="modal-content">

                            <div class="modal-body text-center">  <h1 class="text-success">BUY ORDER</h1>
                                <hr>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                                <form role="form" method="post" action="{{ route('user.buyOrder') }}">
                                    @csrf
                                    <input type="hidden" name="order" value="BUY">
                                    <div class="row">

                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Volume</label>
                                                <input type="number" class="form-control" name="amount" placeholder="Amount to buy" value="" step="any" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 px-md-1">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" name="type">
                                                    <option value="Market Execution">Market Execution</option>
                                                    <option value="Pending Order">Pending Order</option>
                                                </select>
                                                <input type="hidden" name="ordertype" value="buy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Symbol</label>
                                                <select name="symbol" class="form-control">
                                                    <option value="EURUSD ">EURUSD , Euro vs United state Dollar</option>
                                                    <option value="USDJPY">USDJPY, UNITED STATE DOLLAR VS JAPANESE YEN</option>
                                                    <option value="GBPUSD">GBPUSD, GREAT BRITAIN POUNDS VS UNITED STATE DOLLAR</option>
                                                    <option value="USDCAD">USDCAD, UNITED STATE DOLLAR VS CANADIAN DOLLAR</option>
                                                    <option value="USDCHF">USDCHF, UNITED STATE DOLLAR VS SWISS FRANC</option>
                                                    <option value="NZDUSD">NZDUSD, NEW ZEALAND DOLLAR VS UNITED STATE DOLLAR</option>
                                                    <option value="AUDUSD">AUDUSD, AUSTRALIAN DOLLAR VS UNITED STATE DOLLAR</option>
                                                    <option value="AUDNZD">AUDNZD, AUSTRALIAN DOLLAR VS NEW ZEALAND DOLLAR</option>
                                                    <option value="AUDCAD">AUDCAD, AUSTRALIAN DOLLAR VS CANADIAN DOLLAR</option>
                                                    <option value="AUDCHF">AUDCHF, AUSTRALIAN DOLLAR VS SWISS FRANC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Stop Loss <b>(SL)</b></label>
                                                <input type="number" name="sl" class="form-control" min="0" value="0.0000" step="any" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-md-1">
                                            <div class="form-group">
                                                <label>Take Profit <b>(TP)</b></label>
                                                <input type="number" name="tp" class="form-control" min="0" value="0.0000" step="any" required="">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" name="buy" class="btn btn-block btn-success btn-lg " value="Buy by Market">
                                            </div>
                                        </div>
                                    </div>
                                </form>











                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-sm-6" style="float:right;height:72px">

                    <input type="submit" value="BUY" data-toggle="modal" data-target="#modal-10" class="btn btn-success" style="float:right;margin-left:10px;">
                    <input type="submit" value="SELL" data-toggle="modal" data-target="#modal-11" class="btn btn-danger" style="float:right;">

                </div>






                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 46px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22title%22%3A%22S%26P%20500%22%2C%22proName%22%3A%22OANDA%3ASPX500USD%22%7D%2C%7B%22title%22%3A%22Nasdaq%20100%22%2C%22proName%22%3A%22OANDA%3ANAS100USD%22%7D%2C%7B%22title%22%3A%22EUR%2FUSD%22%2C%22proName%22%3A%22FX_IDC%3AEURUSD%22%7D%2C%7B%22title%22%3A%22BTC%2FUSD%22%2C%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%7D%2C%7B%22title%22%3A%22ETH%2FUSD%22%2C%22proName%22%3A%22BITSTAMP%3AETHUSD%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22home.speedexcapitals.net%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22home.speedexcapitals.net%2Fspeedexcapitals%2FDashboard%2FLIVE-trading.php%22%7D" style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>

                    <style>
                        .tradingview-widget-copyright {
                            font-size: 13px !important;
                            line-height: 32px !important;
                            text-align: center !important;
                            vertical-align: middle !important;
                            /* @mixin sf-pro-display-font; */
                            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright .blue-text {
                            color: #2962FF !important;
                        }

                        .tradingview-widget-copyright a {
                            text-decoration: none !important;
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright a:visited {
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright a:hover .blue-text {
                            color: #1E53E5 !important;
                        }

                        .tradingview-widget-copyright a:active .blue-text {
                            color: #1848CC !important;
                        }

                        .tradingview-widget-copyright a:visited .blue-text {
                            color: #2962FF !important;
                        }
                    </style></div>
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
                <div id="tradingview_b3586-wrapper" style="position: relative;box-sizing: content-box;width: auto;height: 610px;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;"><div style="width: auto;height: 610px;background: transparent;padding: 0 !important;"><iframe id="tradingview_b3586" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_b3586&amp;symbol=FX%3AEURUSD&amp;interval=1&amp;range=all&amp;symboledit=1&amp;saveimage=0&amp;toolbarbg=f1f3f6&amp;details=1&amp;calendar=1&amp;hotlist=1&amp;studies=BB%40tv-basicstudies%1FMACD%40tv-basicstudies%1FMF%40tv-basicstudies&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=home.speedexcapitals.net&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD#%7B%22page-uri%22%3A%22home.speedexcapitals.net%2Fspeedexcapitals%2FDashboard%2FLIVE-trading.php%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div>
                <!-- TradingView Widget END -->
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container " style="width: 100%; height: 400px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22utm_source%22%3A%22home.speedexcapitals.net%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22home.speedexcapitals.net%2Fspeedexcapitals%2FDashboard%2FLIVE-trading.php%22%7D" style="box-sizing: border-box; height: calc(368px); width: 100%;"></iframe>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>

                    <style>
                        .tradingview-widget-copyright {
                            font-size: 13px !important;
                            line-height: 32px !important;
                            text-align: center !important;
                            vertical-align: middle !important;
                            /* @mixin sf-pro-display-font; */
                            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright .blue-text {
                            color: #2962FF !important;
                        }

                        .tradingview-widget-copyright a {
                            text-decoration: none !important;
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright a:visited {
                            color: #9db2bd !important;
                        }

                        .tradingview-widget-copyright a:hover .blue-text {
                            color: #1E53E5 !important;
                        }

                        .tradingview-widget-copyright a:active .blue-text {
                            color: #1848CC !important;
                        }

                        .tradingview-widget-copyright a:visited .blue-text {
                            color: #2962FF !important;
                        }
                    </style>
                </div>
                <!-- TradingView Widget END -->


            </div>

        </div>













        <br>
        <div class="pcoded-content" style="background-color:white;margin-bottom:200px">

            <!-- [ breadcrumb ] end -->
            <div class="pcoded-inner-content" style="background-color:white">
                <!-- Main-body start -->
                <div class="main-body" style="background-color:white">
                    <div class="page-wrapper" style="background-color:white">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="card">
                            </div>
                            <!-- Inverse table card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h3>Order History</h3>

                                    <div class="card-header-right">                                                                                                                  </div>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-inverse">
                                            <thead>
                                            <tr>

                                                <th scope="col">Order</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Type</th>

                                                <th scope="col">Symbol</th>
                                                <th scope="col">Volume</th>
                                                <th scope="col">S/L</th>
                                                <th scope="col">T/P</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Expire Time</th>
                                                <th scope="col">Profit</th>
                                                <th scope="col">Loss</th>
                                            </tr>

                                            </thead>
                                            <tbody>



                                            <tr>
                                                <td>CNP-9</td>
                                                <td>2022-11-27 02:33:20</td>
                                                <td><b>BUY ORDER</b></td>
                                                <td>EURUSD </td>
                                                <td>100</td>
                                                <td>0.0000</td>
                                                <td>0.0000</td>
                                                <td>PENDING</td>
                                                <td></td>
                                                <td><span style="color:green">Trade In Process...</span></td>
                                                <td><span style="color:red">Trade In Process...</span></td>
                                            </tr>







                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- Inverse table card end -->

                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
                <!-- Main-body end -->


            </div>
        </div>




    </div>
@endsection
