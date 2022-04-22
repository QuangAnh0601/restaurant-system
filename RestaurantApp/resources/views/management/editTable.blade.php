@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">   

            @include('management.inc.sidebar')

            <div class="col-md-8">
                <i class="fas fa-chair"></i>Edit a Table
                <hr>
                <form action="/management/table/{{$table->id}}" method="POST" enctype="multipart/form-data">
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
                    @method('PUT')
                    <div class="form-group">
                        <label for="tableName">Table Name</label>
                        <input type="text" name="name" value="{{$table->name}}" class="form-control" placeholder="Table...">
                    </div>


                    <button type="submit" class="btn">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection