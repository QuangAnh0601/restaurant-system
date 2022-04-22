@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">    
            @include('management.inc.sidebar')
            <div class="col-md-8">
            <i class="fas fa-align-justify"></i>Category
            <a href="/management/category/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create Category</a>
            <hr>
            @if (Session()->has('status',))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"><img src="{{asset('images/close.png')}}" alt="" width="30px"></button>
                    {{Session()->get('status')}}
                </div>    
            @endif
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th  scope="col"><img src="{{asset('images/repair-tools.png')}}" alt="" width="30px"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td scope="row">{{$category->name}}</td>
                        <td>
                            <a href="/management/category/{{$category->id}}/edit" class="btn"><i class="fas fa-edit"></i></a>

                            <form action="/management/category/{{$category->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn" onclick="return confirm('Are you sure to delete this item ?')" type="submit"><i class="fas fa-trash-alt"></i></button>
                              </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
            </div>
        </div>
    </div>
@endsection