@extends('layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('header')
    <div class="col-0 col-md-1 col-lg-2" style="margin-top:20px">
        @include('home.nav')
    </div>    
    <div class="col-12 col-md-10 col-lg-8" style="margin-top:20px">
        <h1>DIY tips</h1>
        <hr>

        <h3>Cosplay Tips For Beginners</h3>

        <h5>Decent cosplay tips for beginners aren't easy to come by. Top cosplayers dish
            out their best advice for newbies.</h5>

        <div>
            <img src="/wonderwoman.jpg" alt="wonder woman" align="right" width="342" height="342" style="margin:20px">
        </div>

        <p>In every anime convention you'll go to, you will see beginner cosplayers. You can
            tell they're beginners because they often are the most worried about how they look.
            Some look great, others look awful. Ever wonder why some look great, while others look terrible?
        </p>

        <p>We talked to advanced cosplayers and cosplay models to find out how people can avoid cosplay mistakes,
            look great, and actually enjoy con time. Here are the best general cosplay tips for beginners,
            intermediates, and advanced costumers.
        </p>

        <p>If you're going on major cosplay sites, it's way too easy to get intimidated by the amazing
            cosplays some people make. With many professional cosplayers, costumers end up helping them
            make those costumes. Not everyone has the money, time, or skill to create massive works of art.
        </p>

        <div>
            <img src="/rey-costume.jpg" alt="rey" align="left" width="488" height="300" style="margin:20px">
        </div>

        <p>Even if you just buy a hokey costume from a Halloween store, most people will still happily
            compliment it, add you on Facebook, and ask you what other anime conventions you're going to.
        </p>

        <p>
            Many of the cosplayers out there said that one of the best cosplay tips for beginners they
            could give is to just give it a shot. Don't worry about what others think, just have fun with it.
        </p>
    </div>
    <div class="col-0 col-md-1 col-lg-2"></div> 
@endsection
