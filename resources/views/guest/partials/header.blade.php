<header>
    <div class="top-header">
        <ul class="container">
            <li>DC POWER VISA</li>
            <li>ADDITIONAL DC SITES</li>
        </ul>
    </div>
    <div class="bottom-header">
        <nav class="container">
            <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="logo"></a>
            <ul>
                @foreach ($menu as $item)
                    <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
            <input type="text" placeholder="Search">
        </nav>
    </div>
</header>
