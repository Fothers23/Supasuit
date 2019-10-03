@extends('layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('header')
    <div class="col-0 col-md-1 col-lg-2" style="margin-top:20px">
        @include('home.nav')
    </div>
    
    <div class="col-12 col-md-10 col-lg-8" style="margin-top:20px">
        <h1>Home</h1>
        <hr>

        <div align="center" style="margin-bottom:20px">
            <img src="/supasuit.png" height="280px" width="700px">
        </div>

        <p>SUPASUIT is a cosplay website for cosplayers to browse other cosplayers work,
            upload your own and shop the looks.</p>
        <p>Even if you aren’t a cosplayer, our website is a great way to learn about the
            work that goes into costumes, pick up tips about different materials that can
            be used to create the outfits for the characters we’ve all grown to love and
            maybe even inspire you to take part.</p>
    </div>
    <div class="col-0 col-md-1 col-lg-2"></div> 
@endsection

