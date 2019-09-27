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

                @if (Auth::user()->fb_link != null)
                <div class="media">
                <img src="https://image.flaticon.com/icons/png/512/124/124010.png" class="mr-3"
                    alt="facebook_logo" width="35px" height="35px">
                    <div class="media-body">
                        <input type="text" class="form-control" name="fb_link"
                            value="{{ old('fb_link', Auth::user()->fb_link) }}">
                    </div>
                </div>
                @endif

                @if (Auth::user()->twit_link != null)
                <div class="media" style="margin-top:20px">
                    <img src="https://www.toocool2betrue.com/wp-content/uploads/2018/06/twitter-old.png" class="mr-3"
                        alt="twitter_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="twit_link"
                                value="{{ old('twit_link', Auth::user()->twit_link) }}">
                        </div>
                </div>
                @endif

                @if (Auth::user()->insta_link != null)
                <div class="media" style="margin-top:20px">
                    <img src="http://pluspng.com/img-png/instagram-png-instagram-png-logo-1455.png" class="mr-3"
                        alt="instagram_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="insta_link"
                                value="{{ old('insta_link', Auth::user()->insta_link) }}">
                        </div>
                </div>
                @endif

                @if (Auth::user()->snap_link != null)
                <div class="media" style="margin-top:20px">
                    <img src="https://i.dlpng.com/static/png/494744_preview.png" class="mr-3"
                        alt="snapchat_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="snap_link"
                                value="{{ old('snap_link', Auth::user()->snap_link) }}">
                        </div>
                </div>
                @endif

                @if (Auth::user()->tube_link != null)
                <div class="media" style="margin-top:20px">
                    <img src="https://i.pinimg.com/originals/62/60/ef/6260efc8fc9a9002669d2f4ad9956cc0.jpg" class="mr-3"
                        alt="youtube_logo" width="32px" height="32px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="tube_link"
                                value="{{ old('tube_link', Auth::user()->tube_link) }}">
                        </div>
                </div>
                @endif

                @if (Auth::user()->web_link != null)
                <div class="media" style="margin-top:20px">
                    <img src="https://image.flaticon.com/icons/png/512/12/12195.png" class="mr-3"
                        alt="website_logo" width="30px" height="30px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="web_link"
                                value="{{ old('web_link', Auth::user()->web_link) }}">
                        </div>
                </div>
                @endif

                <div style="text-align:right">
                    <button type="submit" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px">Submit</button>
                </div>
            </form>
            
        </div>
    <div class="col-2"></div>
@endsection
