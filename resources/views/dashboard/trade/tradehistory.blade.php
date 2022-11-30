@extends('dashboard.layout.app')
@section('content')

    <div class="ms-content-wrapper">
        <div class="row">

            <!-- News Flash -->
            <style>
                td{
                    color:black;
                }
                th{
                    text-align:Center;
                }
            </style>

            <div class="col-xl-12 col-md-12" style="margin-top:20px">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header">
                        <h3>Trade History </h3>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table thead-primary">
                                <thead style="background-color:#262626">
                                <tr>
                                    <th scope="col">Asset</th>
                                    <th scope="col">Trade Amount</th>
                                    <th scope="col">Trade Date</th>
                                    <th scope="col">Trade Outcome</th>
                                    <th scope="col">Trade Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trades as $item)
                                <tr>
                                    <td>{{ $item->symbol }}</td>
                                    <td>${{ $item->amount }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>${{ $item->profit_loss }}</td>
                                    <td>{!! $item->status() !!}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
