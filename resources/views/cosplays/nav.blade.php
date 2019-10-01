<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/all')) active @endif" href="{{route('cosplay.index', 'all')}}">All</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/anime')) active @endif" href="{{route('cosplay.index', 'anime')}}">Anime</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/cartoons')) active @endif" href="{{route('cosplay.index', 'cartoons')}}">Cartoons</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/dc')) active @endif" href="{{route('cosplay.index', 'dc')}}">DC</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/disney')) active @endif" href="{{route('cosplay.index', 'disney')}}">Disney</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/doctor who')) active @endif" href="{{route('cosplay.index', 'doctor who')}}">Doctor Who</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/games')) active @endif" href="{{route('cosplay.index', 'games')}}">Games</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/game of thrones')) active @endif" href="{{route('cosplay.index', 'game of thrones')}}">Game of Thrones</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/harry potter')) active @endif" href="{{route('cosplay.index', 'harry potter')}}">Harry Potter</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/horror')) active @endif" href="{{route('cosplay.index', 'horror')}}">Horror</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/hunger games')) active @endif" href="{{route('cosplay.index', 'hunger games')}}">Hunger Games</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/lord of the rings')) active @endif" href="{{route('cosplay.index','lord of the rings')}}">Lord of the Rings/Hobbit</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/marvel')) active @endif" href="{{route('cosplay.index','marvel')}}">MARVEL</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/other')) active @endif" href="{{route('cosplay.index', 'other')}}">Other</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/sherlock')) active @endif" href="{{route('cosplay.index','sherlock')}}">Sherlock</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/star trek')) active @endif" href="{{route('cosplay.index','star trek')}}">Star Trek</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/star wars')) active @endif" href="{{route('cosplay.index','star wars')}}">Star Wars</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (Request::is('cosplay/supernatural')) active @endif" href="{{route('cosplay.index', 'supernatural')}}">Supernatural</a>
    </li>
</ul>
