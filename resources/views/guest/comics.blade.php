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
                        <a href="#">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </a>
                    </div>
                    <h3>{{ $comic['series'] }}</h3>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('content-bottom')
    <div class="main-bot">
        <ul class="container">
            {{-- DA FARE PER BEN CON ARRAY ASSOPCIATIVO APPENA SI CAPISC EOCME FAR FUNZIONARE LE IMMAGINI ALTRIMENTI NON SO COSA SCRIVERE NELLA VOCE DELLE IMGS --}}
            <li>DIGITAL COMICS</li>
            <li>DC MERCHANDISE</li>
            <li>SUBSCRIPTION</li>
            <li>COMIC SHOP LOCATOR</li>
            <li>DC POWER VISA</li>
        </ul>
    </div>
@endsection
