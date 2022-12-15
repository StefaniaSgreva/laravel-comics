@extends('layouts.app')

@section('page-title', 'Comics')

{{-- per richiamare lo yield e sostituirlo --}}
@section('content')
    <h1>Current Series</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <h5> {{ $comic['title'] }}</h5>
            </div>
            @endforeach
        </div>  
    </div>
    

    
@endsection
