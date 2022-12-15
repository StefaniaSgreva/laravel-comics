@extends('layouts.app')

@section('page-title', 'Comics | DC')

{{-- per richiamare lo yield e sostituirlo --}}
@section('content')
    <div class="jumbotron"></div>
    <div id="current-series" class="container text-center ">
        <h2 class="section-titol">Current Series</h2>
        <div class="row pt-5 mb-2">
            @foreach ($comics as $comic)
            <div class="col-2 my-3">
                <div class="poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <h5 class="comic-title"> {{ $comic['title'] }}</h5>
            </div>
            @endforeach
        </div>  
        <button class="my-btn">Load More</button>
    </div>

    <div class="shop">
        <div class="container">
            <div class="digital-comics">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                <span>Digital Comics</span>
            </div>
            <div class="merciandise">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="DC Merciandise">
                <span>DC Merciandise</span>
            </div>
            <div class="subscriptions">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscriptions">
                <span>Subscriptions</span>
            </div>
            <div class="shop-locator">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Shop Locator">
                <span>Comic Shop Locator</span>
            </div>
            <div class="power-visa">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC Power Visa">
                <span>DC Power Visa</span>
            </div>
        </div>
    </div>
@endsection
