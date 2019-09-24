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
    </div>
    <div class="col-2"></div> 
@endsection
