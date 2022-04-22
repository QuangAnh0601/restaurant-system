@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">    
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-chair"></i>Create a Table
                <hr>
                <form action="/management/table" method="post">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Table Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Table...">
                    </div>
                    <button type="submit" class="btn"><img src="{{asset('images/add-button.png')}}" alt="" width="50px"></button>
                </form>
            </div>
        </div>
    </div>
@endsection
