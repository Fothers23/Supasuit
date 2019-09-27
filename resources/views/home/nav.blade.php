
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="{{ Request::is('home/main') ? 'nav-link active' : 'nav-link' }}" id="v-pills-home-tab" data-toggle="pill" href="{{ route('home') }}" role="tab"
                aria-controls="v-pills-home" aria-selected="true">Home</a>

            <a class="{{ Request::is('home/discussion') ? 'nav-link active' : 'nav-link' }}" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('discussion') }}" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">Discussion</a>

            <a class="{{ Request::is('home/upcoming') ? 'nav-link active' : 'nav-link' }}" id="v-pills-messages-tab" data-toggle="pill" href="{{ route('upcoming') }}" role="tab"
                aria-controls="v-pills-messages" aria-selected="false">Upcoming cons</a>

            <a class="{{ Request::is('home/tips') ? 'nav-link active' : 'nav-link' }}" id="v-pills-settings-tab" data-toggle="pill" href="{{ route('tips') }}" role="tab"
                aria-controls="v-pills-settings" aria-selected="false">DIY tips</a>
</div>
