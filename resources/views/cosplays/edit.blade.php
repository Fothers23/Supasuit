@extends('master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <h1>Edit existing cosplay</h1>  
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

        <form method="PUT" action="/cosplay/{{ $cosplay->id }}">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Character Name: </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $cosplay->name) }}">
                </div>
                <div class="form-group">
                    <label for="description">Cosplay description: </label>
                    <textarea class="form-control" id="description" rows="3"
                        name="description" value="{{ old('description', $cosplay->description) }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Total Price (£): </label>
                    <input type="text" class="form-control" id="name" name="price" value="{{ old('price', $cosplay->price) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/cosplay/{{ $cosplay->id }}" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
