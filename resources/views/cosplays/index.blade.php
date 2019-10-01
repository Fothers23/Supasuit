@extends('layouts.master')
<link rel="stylesheet" href="/css/styles.css">
@section('title')
    <title>Gallery</title>
    
@endsection

@section('header')
    <div class="col-3" style="margin-bottom:20px">
        <h1>Gallery</h1>
    </div>
    <div class="col-9">
    <form class="form-inline">
        <div class="form-group">
            <input class="form-control" type="search" name="q">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    </div>
@endsection

@section('filtered_content')
    @include('cosplays.nav')
@endsection

@section('success')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
    @endif
@endsection

@section('searchResults')
    @if ($searchTerm && $searched != null)
        <h3>{{$searched->count()}} results matching {{$searchTerm}} . . .</h3>
    @endif
@endsection

@section('content')
    @if(auth()->check())
        <div class="col-12 col-md-4 col-lg-3">
            <a href="/cosplay/create" class="btn btn-primary add-button"><h1>+</h1><p>Add Cosplay</p></a>
        </div>
    @endif
    @foreach($cosplays as $cosplay)
    <div class="col-12 col-md-4 col-lg-3">
        <div class="card" style="margin-bottom: 20px">
            <a href="/cosplay/show/{{ $cosplay->id }}">
                <div style="background-image: url('/images/{{$cosplay->image}}')" class="cos-card-img"></div>

            </a>
            <div class="card-body">
                <h5 class="card-title">{{ $cosplay->name }}</h5>
                <a href="/cosplay/show/{{ $cosplay->id }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    </div>
    @endforeach

    

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
