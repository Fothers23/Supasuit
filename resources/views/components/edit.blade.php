@extends('layouts.master')

@section('title')
    <title>Gallery</title>
@endsection

@section('header')
    <div style="margin-bottom:10px">
        <h1>Edit existing cosplay component</h1>
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

        <form method="POST" action="{{ route('component.update', $component->id) }}">
            @csrf <!-- cross-site forgery request -->
            @method('PUT')
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{ old('cosplay_id', $component->cosplay->name) }}">
                </div>

                <div class="form-group">
                    <label for="name">Component Name: </label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $component->name) }}">
                </div>

                <div class="form-group">
                    <label for="type">Component type: </label>
                    <select class="form-control" name="type">
                        <option value="{{ old('type', $component->type) }}">{{ old('type', $component->type) }}</option>
                        <option value="Wig">Wig</option>
                        <option value="Contact lenses">Contact Lenses</option>
                        <option value="Dress">Dress</option>
                        <option value="Top">Top</option>
                        <option value="Trousers">Trousers</option>
                        <option value="Shorts">Shorts</option>
                        <option value="Skirt">Skirt</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Prop">Prop</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price (£): </label>
                    <input type="text" class="form-control" name="price" value="{{ old('price', $component->price) }}">
                </div>
                <div class="form-group">
                    <label for="shop">Shop Link: </label>
                    <input type="text" class="form-control" name="shop" value="{{ old('shop', $component->shop) }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('cosplay.show', $component->cosplay->id) }}" class="btn btn-primary">Back</a>
	    </form>
    </div>
@endsection
