@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">    
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-align-justify"></i>Create a Category
                <hr>
                <form action="/management/user" method="post">
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
                        <label for="userName">User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="User...">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email...">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password...">
                    </div>

                    <div class="form-group">
                        <label for="Role">Role</label>
                        <select name="role" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->role}}">{{$user->role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
