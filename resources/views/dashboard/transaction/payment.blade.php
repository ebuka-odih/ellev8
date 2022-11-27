@extends('dashboard.layout.app')
@section('content')

<div class="ms-content-wrapper">
    <div class="row">

        <!-- News Flash -->


        <section class="invoice-view-wrapper">
            <div class="row">
                <!-- invoice view page -->
                <div class="col-xl-9 col-md-8 col-12">
                    <div class="card invoice-print-area">
                        <div class="card-content">

                            <div class="col-sm-12" style="background-color:#000;font-weight:bolder;padding:10px;color:#fff">
                  <span>
				  <center style="color:#fff;font-size:18px">

				  Kindly Make A Payment Of <b style="color:#4da9ff">${{ $deposit->amount }}</b> To The {{ $deposit->payment_method->name }} Address Below.
				  </center>

				  </span>
                            </div>
                            <!-- product details table-->

                            <div class="col-xl-12 col-md-12 col-sm-12">
                                <div class="card collapse-icon accordion-icon-rotate" style="border:none">
                                    <div class="card-content">
                                        <p style="color:#000;text-align:center;">Please make your payment to the <b>Crypto-Currency Address</b> below </p>
                                        <div class="card-body">
                                            <div class="accordion" id="cardAccordion">



                                                <div style="border:3px solid #4da9ff;border-radius:5px;margin-top:4px">
                                                    <div class="card-header" aria-expanded="true" aria-controls="collapseOne" role="button" style="background-color:#fff">
                                                        <span class="collapsed collapse-title">
                                                             {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                        </span>
                                                    </div>
                                                    <div id="collapseOne" class="  pt-1" aria-labelledby="headingOne" data-parent="#cardAccordion">
                                                        <div class="card-body" style="color:#000">
                                                            <b style="color:#000">Pay to Bitcoin Address :</b>
                                                            <br>
                                                            <mark style="background-color:#b3daff;font-weight:bolder">   {{ $deposit->payment_method->value }}</mark>
                                                            <br>
                                                            <b>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>


















                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card-body pt-0 mx-25" style="margin-top:20px">
                                <div class="container">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                            {{ session()->get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-12 mt-75" style="background-color:#000;padding:10px;border-radius:4px">
                                        <p style="text-align:left;color:#fff;float:left">Sign this contract by uploading screenshot of your payment
                                        </p>
                                        <form method="POST" action="{{ route('user.processPayment') }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

                                            <input type="file" class="form-control-file" required name="reference" style="float:left;background-color:#fff;margin-top:5px;border:none" placeholder="Enter Payment Mode - Bitcoin, Etheruem, Bitcoin Cash..." value="">
                                            <button type="submit" name="Send" style="float:left;background-color:#66b5ff;margin-top:10px;color:#fff" class="btn">I Have Paid</button>

                                        </form>

                                        <p></p>
                                    </div>
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
                <!-- invoice action  -->




                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="ms-card card-gradient-dark">
                        <div class="ms-card-body">
                            <h1 style="color:white">To Proceed With Other Payment Kindly</h1>
                            <p>Contact management at <b><span style="background-color:#000000;padding:3.4px;border-radius:4px;font-weight:bolder;color:white">support@ellev8.io</span></b> to deposit your investment<b> <!--via Bitcoin , Ethereum and Other Available Payment Methods--></b>,<br> Thank you.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>































        <div class="col-lg-4 col-md-4 col-sm-6">

        </div>





    </div>
</div>

@endsection
