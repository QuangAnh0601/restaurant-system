@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">    
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-align-justify"></i>Create a Category
                <hr>
                <form action="/management/user/{{$user->id}}" method="post">
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
                        <label for="categoryName">User Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="user...">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="user...">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="user...">
                    </div>

                    <div class="form-group">
                        <label for="Role">Role</label>
                        <select name="role" id="" class="form-control">
                                <option value="admin">admin</option>
                                <option value="cashier">cashier</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
