@extends('layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('header')
    <div class="col-2" style="margin-top:20px">
        @include('home.nav')
    </div>    
    <div class="col-8" style="margin-top:20px">
        <img src="/projectlogo.jpg" width="640px" height="360px">
        <h1>Home</h1>
        <p>SUPASUIT is a cosplay website for cosplayers to browse other cosplayers work,
            upload your own and shop the looks.</p>
    </div>
    <div class="col-2"></div> 
@endsection

