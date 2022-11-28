@extends('admin.layout.app')
@section('content')

<div class="ms-content-wrapper">
    <div class="row">
        <!-- News Flash -->
        <style>
            td{
                text-align:center;
                color:black;
            }
            th{
                text-align:Center;
            }
        </style>

        <div class="col-xl-12 col-md-12" style="margin-top:20px">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h1>supremecapitals - Signal Packages List</h1>
                </div>

                <div class="ms-panel-body">




                    <!-- Our Pricing Table -->
                    <section class="ulockd-pricing">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                                    <div class="ulockd-main-title">

                                    </div>
                                </div>
                                <div class="row ulockd-mrgn1260">

                                    @foreach($plans as $item)
                                    <div class="col-xl-4 col-md-4 col-sm-4" style="margin-bottom:5px;float:left">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h2 class="card-title" style="text-align:center"><b>BASIC SIGNAL VIP</b></h2>
                                                </div>
                                                <center>
                                                    <img class="img-fluid" src="signal.jpg" style="width:150px;height:150px;border-radius:100%;margin-top:-20px"><br>

                                                </center>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" style="text-align:center">Minimum Deposit - $1,500</li>
                                                <li class="list-group-item" style="text-align:center">Risk Managements</li>
                                                <li class="list-group-item" style="text-align:center">Standard Options</li>
                                                <li class="list-group-item" style="text-align:center">Leverage 1 : 300</li>

                                                <li class="list-group-item" style="text-align:center">30% Trading Percentage</li>
                                            </ul>
                                            <div class="card-footer d-flex justify-content-between">
                                                <a href="payment.php?amt=1,500" class="btn col-sm-12" style="background-color:#23272D;color:white">Purchase Contract</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
