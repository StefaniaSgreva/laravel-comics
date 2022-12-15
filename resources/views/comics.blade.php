@extends('layouts.app')

@section('page-title', 'Comics')

{{-- per richiamare lo yield e sostituirlo --}}
@section('content')
    <h1>Comics</h1>
    
    @foreach ($comics as $comic)
        <div>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h3> {{ $comic['title'] }}</h3>
        </div>  
    @endforeach
    
@endsection
