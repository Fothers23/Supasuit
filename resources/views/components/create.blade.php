@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <div style="margin-bottom:10px">
        <h1>Add Component to the Cosplay</h1>
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

        <form method="POST" action="{{ route('component.store') }}">
            {{csrf_field()}} <!-- cross-site forgery request -->
                <div class="form-group">
                    <label for="name">Component Name: </label>
                    <input type="text" class="form-control" name="name" placeholder="Input component name here...">
                </div>
                <div class="form-group">
                    <label for="name">Component type: </label>
                    <select class="form-control" name="type">
                        <option value="">Select the type of component here...</option>
                        <option value="wig">Wig</option>
                        <option value="contact lenses">Contact Lenses</option>
                        <option value="dress">Dress</option>
                        <option value="top">Top</option>
                        <option value="trousers">Trousers</option>
                        <option value="shorts">Shorts</option>
                        <option value="skirt">Skirt</option>
                        <option value="shoes">Shoes</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price (£): </label>
                    <input type="text" class="form-control" name="price" placeholder="Input price of component here...">
                </div>
                <div class="form-group">
                    <label for="price">Shop Link: </label>
                    <input type="text" class="form-control" name="shop" placeholder="Input shop link here...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('cosplay.create')}}" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
