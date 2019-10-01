@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <div style="margin-bottom:10px">
        <h1>Edit existing cosplay</h1>
    </div>
@endsection

@section('content')
    <div class="col-8">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-3">
            <img src="/images/{{$cosplay->image}}" alt="{{ $cosplay->name }}">
        </div>

        <form method="post" action="{{ route('cosplay.update', $cosplay->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="image">Picture of Cosplay: </label>
                    <input type="file" class="form-control-file" name="image"  value="{{ old('image', $cosplay->image) }}">
                </div>
                <div class="form-group">
                    <label for="name">Character Name: </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $cosplay->name) }}">
                </div>
                <div class="form-group">
                    <label for="description">Cosplay description: </label>
                    <textarea class="form-control" id="description" rows="3"
                        name="description">{{ old('description', $cosplay->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="name">Fandom category: </label>
                    <select class="form-control" name="category">
                        <option value="{{ old('category', $cosplay->category) }}">{{ old('category', $cosplay->category) }}</option>
                        <option value="anime">Anime</option>
                        <option value="cartoons">Cartoons</option>
                        <option value="dc">DC</option>
                        <option value="disney">Disney</option>
                        <option value="doctor who">Doctor Who</option>
                        <option value="games">Games</option>
                        <option value="game of thrones">Game of Thrones</option>
                        <option value="harry potter">Harry Potter</option>
                        <option value="horror">Horror</option>
                        <option value="hunger games">Hunger Games</option>
                        <option value="lord of the rings">Lord of the Rings/Hobbit</option>
                        <option value="marvel">MARVEL</option>
                        <option value="other">Other</option>
                        <option value="sherlock">Sherlock</option>
                        <option value="star trek">Star Trek</option>
                        <option value="star wars">Star Wars</option>
                        <option value="supernatural">Supernatural</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Total Price (£): </label>
                    <input type="text" class="form-control" id="name" name="price" value="{{ old('price', $cosplay->price) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('cosplay.show', $cosplay->id) }}" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
