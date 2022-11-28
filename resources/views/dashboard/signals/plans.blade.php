@extends('dashboard.layout.app')
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
                        <h3>Ellev8 - Signal Packages List</h3>
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

                                            @if(session()->has('insufficient'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>{{ session()->get('insufficient') }}</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            @if(session()->has('declined'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>{{ session()->get('declined') }}</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>

                                        @foreach($plans as $item)
                                            <div class="col-xl-4 col-md-4 col-sm-4" style="margin-bottom:5px;float:left">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <h4 class="card-title" style="text-align:center"><b>{{ $item->name }}</b></h4>
                                                        </div>
                                                        <center>
                                                            <img class="img-fluid" src="{{ asset('img/signal.jpg') }}" style="width:150px;height:150px;border-radius:100%;margin-top:-20px"><br>

                                                        </center>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" style="text-align:center">Minimum Deposit - ${{ $item->amount }}</li>
                                                        <li class="list-group-item" style="text-align:center">Risk Managements</li>
                                                        <li class="list-group-item" style="text-align:center">Standard Options</li>
                                                        <li class="list-group-item" style="text-align:center">Leverage 1 :
                                                            {{ $item->leverage }}</li>

                                                        <li class="list-group-item" style="text-align:center">{{ $item->total_return }}% Trading Percentage</li>
                                                    </ul>
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <form  action="{{ route('user.subscribe') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $item->id }}" name="subscription_id">
                                                            <input style="border: 1px solid white" type="hidden" class="form-control" name="amount" value="{{ $item->amount }}"  placeholder="Enter Amount">

                                                            <button type="submit" class="btn col-sm-12" style="background-color:#23272D;color:white">Purchase Contract
                                                            </button>
                                                        </form>
{{--                                                        <a href="payment.php?amt=1,500" class="btn col-sm-12" style="background-color:#23272D;color:white">Purchase Contract</a>--}}
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
