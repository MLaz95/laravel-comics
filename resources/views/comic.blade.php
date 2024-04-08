@extends('layouts/app')

@section('content')

<div class="comic-head">
    <div class="my_container">
        <img class="single-cover" src="{{$comics[0]['thumb']}}" alt="{{$comics[0]['title']}}">
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