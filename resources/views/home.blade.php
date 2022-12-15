@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')

    {{-- jumbo --}}
    <div class="jumbo">

    </div>

    {{-- current series --}}
    <div id="current-series" class="current-series">
        <div class="title-current-series">
            <h2>Current series</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="card">
                    <div class="card-img">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                    <div class="card-text">
                        <h4>{{$comic['series']}}</h4>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="container">
            <div class="row">
                <button type="button" class="btn-current-series">Load More</button></div>
        </div>
    </div>

    <h1>I'm Main</h1>
    <ul>
    @foreach ($comics as $comic)
        <li>{{$comic['title']}}</li>
    @endforeach
    </ul>
@endsection
