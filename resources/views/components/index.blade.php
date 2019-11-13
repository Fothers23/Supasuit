@extends('layouts.master')
@section('title')
    <title>Components</title>
    
@endsection

@section('header')
    <div class="col-3" style="margin-bottom:20px">
        <h1>Components</h1>
    </div>
@endsection

@section('content')

    @foreach($components as $component)
    <div class="row" style="margin-bottom:20px">
        <h5>{{ $component->type }}</h5>
        <p>Name: {{ $component->name }}</p>
        <p>Price: £{{ $component->price }}</p>
        <p>Link to the shop's website: <a href="{{ $component->shop }}">{{ $component->shop }}</a></p>
    </div>
    <hr>
    @endforeach

    <div class="row justify-content-center">
        {{ $components->links() }}
    </div>
@endsection


