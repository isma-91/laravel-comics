<header>
    <nav>
        <img src="" alt="logo">
        <ul>
            @foreach ($menu as $item)
                <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
        <input type="text" placeholder="Search">
    </nav>
</header>
