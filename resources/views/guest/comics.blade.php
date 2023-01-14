@extends('guest.layouts.base')

@section('content-top')
    <div class="main-top"></div>
@endsection

@section('content-middle')
    <div class="main-middle">
        <div class="container">
            <div class="news">
                <h1>CURRENT SERIES</h1>
            </div>

            <ul class="container">
            @foreach ($comics as $comic)
                <li class="card comic-card">
                    <div class="comic-img">
                        {{-- DA METTERE DINAMICA E NON /SHOP STATICO --}}
                        <a href="/shop">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </a>
                    </div>
                    <h3>{{ $comic['series'] }}</h3>
                </li>
            @endforeach
            </ul>

            <button class="btn-load-more">LOAD MORE</button>
        </div>
    </div>
@endsection

@section('content-bottom')
    <div class="main-bot">
        <ul class="container">
            @foreach ($shop_links as $link)
                <li>
                    <a href="#">
                        <img src="{{ asset('img/' . $link['img']) }}" alt="{{ $link['txt'] }}">
                        <p>{{ $link['txt'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
