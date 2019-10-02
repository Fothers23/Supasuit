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

@section('success')
    
@endsection

@section('content')
    <div class="col-2"></div>
        <div class="col-8" style="margin-top:20px">

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div><br />
            @endif

            <form method="post" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id", value="{{ $user->id }}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email"
                        value="{{ old('email', $user->email) }}" disabled>
                </div>

                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control" name="name"
                        value="{{ old('name', $user->name) }}">
                </div>

                <div class="media">
                <img src="https://image.flaticon.com/icons/png/512/124/124010.png" class="mr-3"
                    alt="facebook_logo" width="35px" height="35px">
                    <div class="media-body">
                        <input type="text" class="form-control" name="fb_link"
                            value="{{ old('fb_link', $user->fb_link) }}">
                    </div>
                </div>
                <div class="media" style="margin-top:20px">
                    <img src="https://www.toocool2betrue.com/wp-content/uploads/2018/06/twitter-old.png" class="mr-3"
                        alt="twitter_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="twit_link"
                                value="{{ old('twit_link', $user->twit_link) }}">
                        </div>
                </div>
                <div class="media" style="margin-top:20px">
                    <img src="http://pluspng.com/img-png/instagram-png-instagram-png-logo-1455.png" class="mr-3"
                        alt="instagram_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="insta_link"
                                value="{{ old('insta_link', $user->insta_link) }}">
                        </div>
                </div>
                <div class="media" style="margin-top:20px">
                    <img src="https://pbs.twimg.com/profile_images/1156097144664670208/aWnU5YMO_400x400.jpg" class="mr-3"
                        alt="snapchat_logo" width="35px" height="35px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="snap_link"
                                value="{{ old('snap_link', $user->snap_link) }}">
                        </div>
                </div>
                <div class="media" style="margin-top:20px">
                    <img src="https://i.pinimg.com/originals/62/60/ef/6260efc8fc9a9002669d2f4ad9956cc0.jpg" class="mr-3"
                        alt="youtube_logo" width="32px" height="32px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="tube_link"
                                value="{{ old('tube_link', $user->tube_link) }}">
                        </div>
                </div>

                
                <div class="media" style="margin-top:20px">
                    <img src="https://image.flaticon.com/icons/png/512/12/12195.png" class="mr-3"
                        alt="website_logo" width="30px" height="30px">
                        <div class="media-body">
                            <input type="text" class="form-control" name="web_link"
                                value="{{ old('web_link', $user->web_link) }}">
                        </div>
                </div>

                <div style="text-align:right">
                    <button type="submit" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px">Submit</button>
                </div>
            </form>
            <div class="row" style="margin-bottom:20px">

                <h1>My cosplays</h1>

                <table width="100%" border="solid">
                    <tr>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Total Price (£)</th>
                         <th>Category</th>   
                    </tr>     
                    @foreach($user->cosplays as $cosplay)
                        <tr>
                            <td><a href="{{ route('cosplay.show', $cosplay->id) }}">{{$cosplay->name}}</a></td>
                            <td>{{$cosplay->description}}</td>
                            <td>{{$cosplay->price}}</td>
                            <td>{{$cosplay->category}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="container" style="border:ridge; padding:20px; margin-bottom:20px">
                <h1>Delete account</h1>
                <p><b>Warning:</b> Deleting your account is an irreversible action and will also remove all
                    existing cosplays you have posted. </p>
                <p>Should you wish to rejoin this site after deleting
                    your account, you will have to register a new account.</p>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete account</button>
                </form>
            </div>

        </div>
    <div class="col-2"></div>
@endsection
