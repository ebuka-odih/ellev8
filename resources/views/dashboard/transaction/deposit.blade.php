@extends('dashboard.layout.app')
@section('content')

    <div class="ms-content-wrapper">
        <div class="row">

            <!-- News Flash -->



            <div class="col-md-12 col-sm-6">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-10" style="background-color:#ff6666;font-weight:bolder;border:1px solid #ff6666"> Fund My Account </button>
            </div>
            <div class="modal fade" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10">
                <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                    <div class="modal-content">

                        <div class="modal-body text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <img src="{{ asset('img/1128456.svg') }}" style="width:120px;padding:20px">
                            <h4>Make Deposit Now</h4>
                            <form method="POST" action="{{ route('user.processDeposit') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="ms-form-group has-icon">
                                    <label for="">Amount</label>
                                    <input type="text" placeholder="Enter Amount in " class="form-control" name="amount" required="">
                                </div>
                                <div class="ms-form-group has-icon">
                                    <label for="">Payment Method</label>
                                    <select name="payment_method_id" id="" class="form-control" required="">
                                        <option selected>Choose Payment Method</option>
                                        @foreach($wallets as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" style="color:white;background-color:#67B237;ffont-weight:bolder;border:1px solid #67B237">Next
                                    <img src="{{ asset('img/dot-arrow.svg') }}" style="width:20px"></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>










            <div class="col-xl-12 col-md-12" style="margin-top:20px">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header">
                        <h6>Deposit History </h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table thead-primary">
                                <thead style="background-color:#262626">
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Payment mode</th>
                                    <th scope="col">Payment Confirmation</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">2022-08-23</th>
                                    <td>$440.00</td>
                                    <td></td>
                                    <td>PENDING</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
