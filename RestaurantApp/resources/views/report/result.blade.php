@extends('layouts.app')

@section('content')
<div class="container">

    <div class="alert alert-success">
        <ul>
            <p>from {{$from}} to {{$to}}</p>
            <br>
            {{$result}}
        </ul>
    </div>
    <form action="/report/export/{{$from}}/{{$to}}" method="get">
    <div>
       @include('export.sale')
        <button type="submit" class="btn btn-primary">
            Export Excel
        </button>
    </div>
    </form>

</div>

@endsection