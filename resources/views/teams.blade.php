@extends('layouts.master')

@section('title')
    All Teams
@endsection()

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ $teams->links() }}
            @foreach($teams as $team)
                <div class="jumbotron">
                    <p>
                        <a href= {{route('team', ['id' => $team->id])}}> {{ $team->name }} </a>
                    </p>
                    <p>{{ $team->city }}</p>
                    <p><a href="{{route('team', ['id' => $team->id])}}" class="btn btn-primary btn-lg">Read more</a></p>
                </div>
            @endforeach
            {{ $teams->links() }}
        </div>

    </div>
@endsection()
