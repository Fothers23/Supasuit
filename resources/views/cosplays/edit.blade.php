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
                    <label for="price">Total Price (£): </label>
                    <input type="text" class="form-control" id="name" name="price" value="{{ old('price', $cosplay->price) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('cosplay.show', $cosplay->id) }}" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
