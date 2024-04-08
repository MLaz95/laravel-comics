@extends('layouts/app')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-6 row-gap-3">
                @foreach ($comics as $singleComic)
                <div class="col">
                    <div class="card h-100 border-0">
                        <div class="ratio ratio-1x1">
                            <img src="{{$singleComic['thumb']}}" class="object-fit-cover cover" alt="{{$singleComic['title']}}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$singleComic['title']}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
