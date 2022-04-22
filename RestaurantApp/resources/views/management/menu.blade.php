@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @include('management.inc.sidebar')

            <div class="col-md-8">
                <i class="fas fa-hamburger"></i>Menu
                <a href="/management/menu/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create Menu</a>
                <hr>
                @if (Session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><img src="{{asset('images/close.png')}}" alt="" width="30px"></button>
                        {{Session()->get('status')}}
                    </div>    
                @endif
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Description</th>
                            <th scope="col">Categories</th>
                            <th align="center" scope="col"><img src="{{asset('images/repair-tools.png')}}" alt="" width="30px"></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                           <tr>
                                <td>{{$menu->id}}</td>  
                                <td>{{$menu->name}}</td> 
                                <td>{{$menu->price}}</td> 
                                <td>
                                    <img src="{{asset('menu_images')}}/{{$menu->image}}" alt="{{$menu->name}}" width="120px"  class="img-thumnail"></td> 
                                <td>{{$menu->description}}</td>  
                                <td>{{$menu->category->name}}</td>

                                <td>
                                    <a href="/management/menu/{{$menu->id}}/edit" class="btn"><i class="fas fa-edit"></i></a>

                                    <form action="/management/menu/{{$menu->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" onclick="return confirm('Are you sure to delete this item ?')" type="submit">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr> 

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection