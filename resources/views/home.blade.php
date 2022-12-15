@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <h1>I'm Main</h1>
    <ul>
    @foreach ($comics as $comic)
        <li>{{$comic['title']}}</li>
    @endforeach
    </ul>
@endsection
