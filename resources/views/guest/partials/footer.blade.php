<footer>
    <div class="footer-top">
        <div class="container">
            <div class="left-side">
                <div class="links">
                    @foreach($footer_links as $section)
                        @if($section['title'] == 'DC COMICS' || $section['title'] == 'SHOP')
                            <h2>{{ $section['title'] }}</h2>
                            <ul>
                                @foreach($section['links'] as $link)
                                    <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="links">
                    @foreach($footer_links as $section)
                        @if($section['title'] == 'DC')
                            <h2>{{ $section['title'] }}</h2>
                            <ul>
                                @foreach($section['links'] as $link)
                                    <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="links">
                    @foreach($footer_links as $section)
                        @if($section['title'] == 'SITES')
                            <h2>{{ $section['title'] }}</h2>
                            <ul>
                                @foreach($section['links'] as $link)
                                    <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="right-side">
                <img class="offset" src="/img/dc-logo-bg.png" alt>
            </div>

        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="cta">
                <button class="btn-cta"> SIGN-UP NOW! </button>
            </div>
            <div class="socials">
                <h2>FOLLOW US</h2>
                <ul>
                    @foreach($social_links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">
                                <img src="{{ $link['img'] }}" alt="{{ $link['text'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>


{{--                   STATIC VERSION                     --}}
{{-- <footer>
    <div class="footer-top">
        <div class="container">
            <div class="left-side">
                <div class="links">
                    <h2>DC COMICS</h2>
                    <ul>
                        <li><a href="!#">Characters</a></li>
                        <li><a href="!#">Comics</a></li>
                        <li><a href="!#">Movies</a></li>
                        <li><a href="!#">TV</a></li>
                        <li><a href="!#">Games</a></li>
                        <li><a href="!#">Videos</a></li>
                        <li><a href="!#">News</a></li>
                    </ul>
                    <h2>SHOP</h2>
                    <ul>
                        <li><a href="!#">Shop DC</a></li>
                        <li><a href="!#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="links">
                        <h2>DC</h2>
                    <ul>
                        <li><a href="!#">Terms Of Use</a></li>
                        <li><a href="!#">Privacy policy (New)</a></li>
                        <li><a href="!#">Ad Choices</a></li>
                        <li><a href="!#">Advertising</a></li>
                        <li><a href="!#">Jobs</a></li>
                        <li><a href="!#">Subscriptions</a></li>
                        <li><a href="!#">Talent Workshop</a></li>
                        <li><a href="!#">CPSC Certificates</a></li>
                        <li><a href="!#">Ratings</a></li>
                        <li><a href="!#">Shop Help</a></li>
                        <li><a href="!#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="links">
                    <h2>SITES</h2>
                    <ul>
                    <li><a href="!#">DC</a></li>
                    <li><a href="!#">MAD Magazine</a></li>
                    <li><a href="!#">DC Kids</a></li>
                    <li><a href="!#">DC Universe</a></li>
                    <li><a href="!#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-side">
                <img class="offset" src="/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="cta">
                <button class="btn-cta"> SIGN-UP NOW! </button>
            </div>
            <div class="socials">
                <h2>FOLLOW US</h2>
                <ul>
                    <li><img src="/img/footer-facebook.png" alt=""></li>
                    <li><img src="/img/footer-twitter.png" alt=""></li>
                    <li><img src="/img/footer-youtube.png" alt=""></li>
                    <li><img src="/img/footer-pinterest.png" alt=""></li>
                    <li><img src="/img/footer-periscope.png" alt=""></li>
                </ul>

            </div>
        </div>
    </div>
</footer> --}}


{{--                   DYNAMIC VERSION WITHOUT "IF" (NOT GOOD)                  --}}
{{-- <footer>
    <div class="footer-top">
        <div class="container">
            <div class="left-side">
                @foreach($footer_links as $section)
                    <div class="links">
                        <h2>{{ $section['title'] }}</h2>
                        <ul>
                            @foreach($section['links'] as $link)
                                <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="right-side">
                <img class="offset" src="/img/dc-logo-bg.png" alt>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="cta">
                <button class="btn-cta"> SIGN-UP NOW! </button>
            </div>
            <div class="socials">
                <h2>FOLLOW US</h2>
                <ul>
                    @foreach($social_links as $link)
                        <li><a href="{{ $link['url'] }}"><img src="{{ $link['img'] }}" alt="{{ $link['text'] }}"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer> --}}
