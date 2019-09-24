@extends('layouts.master')
@section('title')
    <title>Gallery</title>
@endsection

@section('content')
    <div class="col-1"></div>
    <div class="col-10">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-4">
                    <img src="/images/{{$cosplay->image}}" class="card-img" alt="{{ $cosplay->name }}">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $cosplay->name }}</h3>
                        <p class="card-text"><span style="color:grey">Description: </span>{{ $cosplay->description }}</p>
                        <p class="card-text"><span style="color:grey">Price: </span>£{{ $cosplay->price }}</p>
                        <p class="card-text"><span style="color:grey">Posted by: </span>{{ $cosplay->user->name }}</p>
                        @auth()
                            @if (Auth::user()->id == $cosplay->user->id)
                            <a href="/cosplay/{{ $cosplay->id }}/edit" class="btn btn-primary">Edit</a>
                            @endif
                        @endauth
                        <a href="/cosplay" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
@endsection
