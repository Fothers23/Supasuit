@extends('layouts.master')

@section('title')
    <title>Profile</title>
@endsection

@section('header')
    <div class="col-2"></div>
        <div class="col-8" style="margin-top:20px">
            <h1>Profile</h1>
            <h3>{{ Auth::user()->name }}</h3>
        </div>
    <div class="col-2"></div>
@endsection

@section('content')
    <div class="col-2"></div>
        <div class="col-8" style="margin-top:20px">
            <form method="post" action="">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email"
                        value="{{ old('email', Auth::user()->email) }}" disabled>
                </div>
            </form>
        </div>
    <div class="col-2"></div>
@endsection
