@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <h1>Gallery</h1>
@endsection

@section('content')
    <style>
        .cos-card-img {
            background-size: cover;
            padding-top: 120%;
            background-position: 50% 50%;
        }
    </style>
    @foreach($cosplays as $cosplay)
    <div class="col-3">
        <div class="card" style="margin-bottom: 20px">
            <a href="/cosplay/{{ $cosplay->id }}">
                <div style="background-image: url('/images/{{$cosplay->image}}')" class="cos-card-img"></div>

            </a>
            <div class="card-body">
                <h5 class="card-title">{{ $cosplay->name }}</h5>
                
                <a href="/cosplay/{{ $cosplay->id }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    </div>
    @endforeach
    @if(auth()->check())
    <div class="col-3">
        <a href="/cosplay/create" class="btn btn-primary">+ Add Cosplay</a>
    </div>
    @endif
@endsection
