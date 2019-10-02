<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="{{ route('home') }}"><img src="/supasuit_white.png" height="32px" width="120px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-link @if (Request::is('home*')) active @endif">
						<a class="nav-link" href="{{ route('home') }}">Home</a>
					</li>
					<li class="nav-link @if ( Request::is('cosplay*')) active @endif">
						<a class="nav-link" href="{{ route('cosplay.index', 'all') }}">Gallery</a>
					</li>
				</ul>
				<span class="navbar-text">
					<ul class="navbar-nav mr-auto">
                        @auth()
                            <li class="nav-link @if ( Request::is('user*')) active @endif">
                                <a class="nav-link" href="{{ route('profile', auth()->user()->id) }}">{{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link" href="{{ route('logout') }}">Log out</a>
                            </li>
                        @endauth
                        @guest()
					        <li class="nav-link @if ( Request::is('register')) active @endif">
						        <a class="nav-link" href="{{ route('register') }}">Register</a>
					        </li>
					        <li class="nav-link @if ( Request::is('login')) active @endif">
						        <a class="nav-link" href="{{ route('login') }}">Log in</a>
					        </li>
                        @endguest
				</ul>
				</span>
			</div>
		</nav>

		<br>
               
		<div class="container">
			<div class="row"> 
			    @yield('header')
			</div>
            <div class="row">
                @yield('filtered_content')
			</div>
            <div class="row">
                @yield('success')
			</div>
            <div class="row"> 
			    @yield('searchResults')
			</div>
            <div class="row"> 
				@yield('content')
			</div>
            <div class="row justify-content-center">
                @yield('pages')
            </div>
        <div>
			
    </body>
</html>
