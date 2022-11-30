@extends('dashboard.layout.app')
@section('content')

    <div class="ms-content-wrapper">
        <div class="row">

            <!-- News Flash -->
            <style>
                label{
                    color:white;
                }
            </style>


            <div class="col-xl-12 col-md-12">
                <div class="ms-card ms-widget ms-infographics-widget" style="background-image: linear-gradient(100deg, black, #178000);border:none">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 style="color:white">Balance ${{ auth()->user()->balance }}</h6>
                            <p class="ms-card-change" style="color:white"> <img src="https://home.speedexcapitals.net/speedexcapitals/Dashboard/money-bag-with-dollar-symbol.svg" style="width:20px">  </p>
                            <p class="fs-12">Stats</p>
                        </div>
                    </div>
                    <i class="fa fa-chart-area"></i>
                </div>
            </div>







            <div class="col-xl-12 col-md-12" style="margin-top:20px">
                <form method="post" action="" style="background-color:#262626; padding:20px; margin-top:10px;border-radius:10px">
                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Withdrawal mode:</label>
                        </div>
                        <div class="sign-up2">
                            <select name="payment_mode" onchange="this.form.submit()" style="width: 100%; height:40px;">
                                <option>- Select Withdrawal Method -</option>
                                <option value="Bitcoin">Bitcoin</option>
                                <option value="Bank">Bank Transfer</option>
                                <option value="Ethereum">Ethereum</option>
                            </select>
                            <select name="method" onchange="select_method()" required="" class="form-control" id="method" style="width: 100%; height:40px;">
                                <option value="">Select Withdrawal Method</option>
                                <option value="crypto_withdraw">CryptoCurrency Withdraw</option>
                                <option value="bank_withdraw">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                    <br>
                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Bank Name *:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="bankname" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                            <input type="hidden" name="pmode" value="Bank">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Bank Address *:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="bankadd" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>



                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Account Name *:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="accname" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Account Number *:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="accnum" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Routing Number:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="routnum" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>







                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Swift Code *:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="swcode" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="sign-u">
                        <div class="sign-up1">
                            <label>Withdrawal Amount:</label>
                        </div>
                        <div class="sign-up2">
                            <input type="number" step="0.01" name="amount" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>
                        <div class="clearfix"> </div>
                    </div>



                    <br>
                    <div style="background-color:black;padding:10px;border-radius:20px;color:#66ff66">
                        Kindly Contact us via email <br> <b>support@speedexcapitals.net</b> to <b>Request</b> for <b>Transfer Code : </b>
                        <br>
                        <span>Enter Transfer Code</span>
                        <br>
                        <div class="sign-up2">
                            <input type="text" name="tfcoder" class="col-sm-12 form-control" style="width: 100%; height:40px;">
                        </div>

                    </div>

                    <div class="sub_home">
                        <center>
                            <input type="submit" class="btn btn-default" name="banksub" value="Withdraw" style="background-color:skyblue;color:#fff;font-weight:bolder">
                        </center>
                        <div class="clearfix"> </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
