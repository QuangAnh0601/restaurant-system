@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Choose date for report</h3>
        <form action="/report/result" method="POST">
            @csrf
            <input type="date" value="" id="date" name="from">
            <input type="date" value="" id="date" name="to">
            <button type="submit" class="btn btn-primary">
                Show Report
            </button>
        </form>
    </div>
@endsection