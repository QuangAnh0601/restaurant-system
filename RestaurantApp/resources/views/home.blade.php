@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Main Function</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><img src="{{asset('images/close.png')}}" alt="" width="30px"></button>
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">
                        <div class="col-sm-4">
                            <a href="/management">
                                <h4>Management</h4>
                                <img src="{{asset('images/management.png')}}" width="50px" alt="">
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="/cashier">
                                <h4>Cashier</h4>
                                <img src="{{asset('images/Cashier-machine.png')}}" width="50px" alt="">
                            </a>
                        </div>
                        
                        <div class="col-sm-4">
                            <a href="/report">
                                <h4>Report</h4>
                                <img src="{{asset('images/business-report.png')}}" width="50px" alt="">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
