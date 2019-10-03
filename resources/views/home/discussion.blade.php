@extends('layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('header')
    <div class="col-2" style="margin-top:20px">
        @include('home.nav')
    </div>    
    <div class="col-8" style="margin-top:20px">
        <h1>Discussion</h1>
        <hr>

        <iframe width="730" height="455"
                src="https://www.youtube.com/embed/oXXR1j528tE"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                style="margin-bottom:20px">
        </iframe>

        @foreach($articles as $article)
            <div style="margin-bottom:20px">
                <h3>{{ $article->title }}</h3>
                <p>{{ $article->content }}</p>
                <small class="form-text text-muted" style="text-align:right">
                    <span style="color:grey">Written by: </span>{{ $article->author }}
                </small>
            </div>
        @endforeach
        
    </div>
    <div class="col-2"></div> 
@endsection
