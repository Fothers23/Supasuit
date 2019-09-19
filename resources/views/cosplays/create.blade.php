@extends('master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <h1>Add Cosplay to the Gallery</h1>  
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
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
        @endif

        <form method="POST" action="/cosplay">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="image">Picture of Cosplay: </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Character Name: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input character name here...">
                </div>
                <div class="form-group">
                    <label for="description">Cosplay description: </label>
                    <textarea class="form-control" id="description" rows="3"
                        name="description" placeholder="Input the description of your cosplay here..."></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Total Price (£): </label>
                    <input type="text" class="form-control" id="name" name="price" placeholder="Input character name here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/cosplay" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
