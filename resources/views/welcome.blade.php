@extends('layouts/app')

@section('content')
    <main class="pb-3">

        <div class="container d-flex flex-column align-items-center">
            <div class="text-white text-uppercase my_page_tag px-3 py-2 align-self-start">
                <h2 class="m-0">
                    Current series
                </h2>
            </div>
            <div class="row row-cols-6 row-gap-3">
                @foreach ($comics as $singleComic)
                <div class="col">
                    <a href="{{route('comic')}}" class="card h-100 border-0 rounded-0 bg-transparent text-white">
                        <div class="ratio ratio-1x1">
                            <img src="{{$singleComic['thumb']}}" class="object-fit-cover cover" alt="{{$singleComic['title']}}">
                        </div>
                        <div class="py-4">
                            <h5 class="text-uppercase p-0">{{$singleComic['title']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <button class="border-0 text-white text-uppercase fw-bold py-2 px-5">Load More</button>
        </div>

        <div>
            <div class="container">
                <ul class="d-flex justify-content-around">
                    {{-- @foreach ($blueLinks as $bLink)
                    <li>test</li>
                    @endforeach --}}
                </ul>
            </div>
        </div>
    </main>
@endsection
