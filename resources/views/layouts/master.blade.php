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
			<a class="navbar-brand" href="#">SUPASUIT</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/cosplay">Gallery</a>
					</li>
				</ul>
				<span class="navbar-text">
					<ul class="navbar-nav mr-auto">
                        @auth()
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">Log out</a>
                            </li>
                        @endauth
                        @guest()
					        <li class="nav-item">
						        <a class="nav-link" href="{{ route('register') }}">Register</a>
					        </li>
					        <li class="nav-item">
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
				<div class="col-12">
					@yield('header')
                    <br>
                    @yield('success')
				</div>
			</div>
            <div class="row"> 
				@yield('content')
			</div>
        <div>
			
    </body>
</html>
