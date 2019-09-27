<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/all') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.index')}}">All</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/anime') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.anime')}}">Anime</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/cartoons') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.cartoons')}}">Cartoons</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/dc') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.dc')}}">DC</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/disney') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.disney')}}">Disney</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/dr_who') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.dr_who')}}">Doctor Who</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/games') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.games')}}">Games</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/game_of_thrones') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.game_of_thrones')}}">Game of Thrones</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/harry_potter') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.harry_potter')}}">Harry Potter</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/horror') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.horror')}}">Horror</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/hunger_games') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.hunger_games')}}">Hunger Games</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/lotr') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.lotr')}}">Lord of the Rings/Hobbit</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/marvel') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.marvel')}}">MARVEL</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/other') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.other')}}">Other</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/sherlock') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.sherlock')}}">Sherlock</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/star_trek') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.star_trek')}}">Star Trek</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/star_wars') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.star_wars')}}">Star Wars</a>
    </li>
    <li class="nav-item">
        <a class="{{ Request::is('cosplay/supernatural') ? 'nav-link active' : 'nav-link' }}" href="{{route('cosplay.supernatural')}}">Supernatural</a>
    </li>
</ul>
