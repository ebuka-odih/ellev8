@extends('dashboard.layout.app')
@section('content')

    <div class="ms-content-wrapper">
        <div class="row">

            <!-- News Flash -->

            <div class="col-xl-12 col-md-12" style="margin-top:20px">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <center>
                                <img src="{{ asset('img/126100.svg') }}" style="height:80px;padding:20px">
                            </center>
                        </div>
                        <div class="ms-card-body">
                            <h3 style="text-align:center;margin-top:-30px">Contact Via Our Support Mails</h3>
                            <p>
                            </p>
                            <center>
                                <span style="color:white;background-color:#020202;padding:7px;border-radius:5px"><a href="mailto:support@ellev8.io">support@ellev8.io</a></span>
                            </center>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
