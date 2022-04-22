@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">    
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-chair"></i>Table
            <a href="/management/table/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create Table</a>
            <hr>
            @if (Session()->has('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"><img src="{{asset('images/close.png')}}" alt="" width="30px"></button>
                    {{Session()->get('status')}}
                </div>    
            @endif
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Table</th>
                        <th scope="col">Status</th>
                        <th  scope="col"><img src="{{asset('images/repair-tools.png')}}" alt="" width="30px"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                        <tr>
                            <td>{{$table->id}}</td>
                            <td>{{$table->name}}</td>
                            <td>{{$table->status}}</td>
                            <td>
                                <a href="/management/table/{{$table->id}}/edit" class="btn"><i class="fas fa-edit"></i></a>
                                <form action="/management/table/{{$table->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" onclick="return confirm('are you sure to delete this item ?')">
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