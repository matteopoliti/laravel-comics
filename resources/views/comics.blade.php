@extends('layouts.basic')

@section('title', 'Benvenuto | Comics')



@section('content')
    <main>
        <div class="jumbo">
        </div>
        <div class="bg_black">
            <div class="container">
                <h2>Current series</h2>

                <div class="comics">


                    @foreach ($currentComics as $item)
                        <div class="col">
                            <figure>
                                <img src="{{ $item['thumb'] }}" alt="thumb comic">
                            </figure>
                            <h5>{{ $item['series'] }}</h5>
                            <p>A partire da <span>{{ $item['price'] }}</span></p>
                            <p>Categoria: <span id="type">{{ $item['type'] }}</span></p>
                        </div>
                    @endforeach


                    <button> Load More</button>

                </div>
            </div>
        </div>
        <div class="bg_blue">

            <div class="container info">
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </figure>
                    <p>Digital comics</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </figure>
                    <p>dc merchandise</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </figure>
                    <p>comic shop locator</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </figure>
                    <p>subscription</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </figure>
                    <p>dc power visa</p>
                </div>
            </div>
        </div>
    </main>
@endsection
