@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <div style="margin-bottom:10px">
        <h1>Add Cosplay to the Gallery</h1>
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
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
        @endif

        <form method="POST" action="{{ route('cosplay.store') }}"  enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" class="form-control" name="user" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                    <label for="image">Picture of Cosplay: </label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <div class="form-group">
                    <label for="name">Character Name: </label>
                    <input type="text" class="form-control" name="name" placeholder="Input character name here...">
                </div>
                <div class="form-group">
                    <label for="description">Cosplay description: </label>
                    <textarea class="form-control" rows="3"
                        name="description" placeholder="Input the description of your cosplay here..."></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Total Price (£): </label>
                    <input type="text" class="form-control" name="price" placeholder="Input character name here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/cosplay" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
