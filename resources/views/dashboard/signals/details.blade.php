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

                                    <table class="table table-striped" >
                                        <tr>
                                            <th>Name:</th>
                                            <td> {{ $sub->subscription->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount:</th>
                                            <td> {{ $sub->subscription->amount }}</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage:</th>
                                            <td>1:{{ $sub->subscription->leverage }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Return(%):</th>
                                            <td>{{ $sub->subscription->total_return }}%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
