@extends('layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('header')
    <div class="col-0 col-md-1 col-lg-2" style="margin-top:20px">
        @include('home.nav')
    </div>    
    <div class="col-12 col-md-10 col-lg-8" style="margin-top:20px">
        <div style="margin-bottom:20px">
            <h1>Upcoming cons</h1>
        </div>
        <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
            <h3>Wales</h3>
            <hr>

            @foreach($welshCons as $con)
                <div style="margin-bottom:20px">
                    <h5>{{ $con->name }}</h5>
                    <p>Start Date: {{ $con->start_date }} - End Date: {{ $con->end_date }}</p>
                    <p>Location: {{ $con->location }}</p>
                    <p>Link to the website: <a href="{{ $con->link }}">{{ $con->link }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
            <h3>England</h3>
            <hr>

            @foreach($engCons as $con)
                <div style="margin-bottom:20px">
                    <h5>{{ $con->name }}</h5>
                    <p>Start Date: {{ $con->start_date }} - End Date: {{ $con->end_date }}</p>
                    <p>Location: {{ $con->location }}</p>
                    <p>Link to the website: <a href="{{ $con->link }}">{{ $con->link }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
            <h3>Scotland</h3>
            <hr>

            @foreach($scotCons as $con)
                <div style="margin-bottom:20px">
                    <h5>{{ $con->name }}</h5>
                    <p>Start Date: {{ $con->start_date }} - End Date: {{ $con->end_date }}</p>
                    <p>Location: {{ $con->location }}</p>
                    <p>Link to the website: <a href="{{ $con->link }}">{{ $con->link }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
            <h3>Ireland</h3>
            <hr>

            @foreach($irishCons as $con)
                <div style="margin-bottom:20px">
                    <h5>{{ $con->name }}</h5>
                    <p>Start Date: {{ $con->start_date }} - End Date: {{ $con->end_date }}</p>
                    <p>Location: {{ $con->location }}</p>
                    <p>Link to the website: <a href="{{ $con->link }}">{{ $con->link }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="col-0 col-md-1 col-lg-2"></div> 
@endsection
