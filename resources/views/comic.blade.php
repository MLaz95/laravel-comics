@extends('layouts/app')

@section('content')

<div class="comic-head">
    <div class="my_container">
        <a href="{{route('gallery')}}" class="single-cover border d-block">
            <img class="img-fluid" src="{{$comics[0]['thumb']}}" alt="{{$comics[0]['title']}}">
            <div class="text-center back-link text-white">VIEW GALLERY</div>
        </a>
    </div>
</div>

<div class="my_container py-5">

    <h1>{{$comics[0]['title']}}</h1>

    <div class="row border highlight my-3">
        <div class="col-9 d-flex justify-content-between  py-3">
            <div>U.S.Price: <span>{{$comics[0]['price']}}</span></div>
            <div>AVAILABLE</div>
        </div>
        <div class="col-3 border-start text-center py-3">Check Availability</div>
    </div>

    <p>{{$comics[0]['description']}}</p>

</div>

@endsection