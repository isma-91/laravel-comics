@extends('guest.layouts.base')

@section('content')
    {{-- Fare array dei comics --}}
    <h1>sono i comics</h1>
    <ul>
    @foreach ($comics as $comic)
        <li><a href="#"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}"></a></li>
    @endforeach
    </ul>
@endsection
