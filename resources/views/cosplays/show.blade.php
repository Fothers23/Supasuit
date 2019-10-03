@extends('layouts.master')
<link rel="stylesheet" href="/css/cosplayshow.css">

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
                        <p class="card-text"><span style="color:grey">Description: </span>{{ $cosplay->description }}<br>
                        <span style="color:grey">Price: </span>£{{ $cosplay->price }}<br>
                        <span style="color:grey">Category: </span>{{ $cosplay->category }}<br>
                        <span style="color:grey">Posted by: </span>{{ $cosplay->user->name }}</p>
                        <small class="form-text text-muted" style="text-align:right"><span style="color:grey">Posted on: </span>{{ $cosplay->created_at }}</small>
                    
                        <div class="row">
                            @auth()
                                @if (Auth::user()->id == $cosplay->user->id)
                                    <a href="{{ route('component.create', $cosplay->id)}}" class="btn btn-primary">Add Cosplay Component</a>
                                    <a href="{{ route('cosplay.edit', $cosplay->id)}}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('cosplay.destroy', $cosplay->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a><button class="btn btn-danger" type="submit">Delete</button></a>
                                    </form>
                                @endif
                            @endauth
                            <a href="{{route('cosplay.index','all')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
            <h1>Shop the look</h1>
            <h3>Components of this cosplay</h3>
            <hr>

            @foreach($cosplay->components as $component)
                <div style="margin-bottom:20px">
                    <h5>{{ $component->type }}</h5>
                    <p>Name: {{ $component->name }}</p>
                    <p>Price: £{{ $component->price }}</p>
                    <p>Link to the shop's website: <a href="{{ $component->shop }}">{{ $component->shop }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
        </div>
    </div>
    <div class="col-1"></div>
@endsection
