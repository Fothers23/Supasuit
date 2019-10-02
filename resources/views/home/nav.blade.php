
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link @if ( Request::is('home/main')) active @endif" id="v-pills-home-tab" data-toggle="pill" href="{{ route('home') }}" role="tab"
                aria-controls="v-pills-home" aria-selected="true">Home</a>

            <a class="nav-link @if ( Request::is('home/discussion')) active @endif" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('discussion') }}" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">Discussion</a>

            <a class="nav-link @if ( Request::is('home/upcoming')) active @endif" id="v-pills-messages-tab" data-toggle="pill" href="{{ route('upcoming') }}" role="tab"
                aria-controls="v-pills-messages" aria-selected="false">Upcoming cons</a>

            <a class="nav-link @if ( Request::is('home/tips')) active @endif" id="v-pills-settings-tab" data-toggle="pill" href="{{ route('tips') }}" role="tab"
                aria-controls="v-pills-settings" aria-selected="false">DIY tips</a>
</div>
