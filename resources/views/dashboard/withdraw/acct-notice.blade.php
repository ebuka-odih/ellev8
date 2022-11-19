@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="col-md-10 offset-lg-1 col-12">
                            <div class="media flex-column text-center p-40 bg-white mb-20">
                              <span class="avatar avatar-xxl bg-warning opacity-60 mx-auto">
                                <i class="align-sub fa fa-google-wallet font-size-40"></i>
                              </span>
                                <div class="mt-20">
                                    <h6 class="text-uppercase fw-500">Set Up Withdrawal Account!</h6>
                                    <p>In order to make withdrawal you must setup your payment wallet</p>
                                    <br>
                                    <a href="{{ route('user.account') }}" class="btn btn-primary">Setup Account</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
