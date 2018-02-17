@extends('layouts.master')

@section('title')
    Team
@endsection()

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <div class="jumbotron">
                <h1>{{ $team->name }}</h1>
                <p> City: {{$team->city}} | {{$team->email}} </p>
            </div>
        </div>

    </div>
@endsection()