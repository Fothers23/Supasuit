@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <div style="margin-bottom:10px">
        <h1>Gallery</h1>
    </div>
@endsection

@section('success')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
    @endif
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

@section('pages')
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection
