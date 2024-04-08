<div id="top-bar">
    <ul class="container d-flex justify-content-end gap-3 text-white">
        <li>DC POWER VISA<sup>5M</sup> &#174;</li>
        <li>ADDITIONAL DC SITES</li>
    </ul>
</div>
<nav class="navbar bg-white py-3">
    <div class="container">
        <img class="nav-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        
        <ul class="d-flex gap-4 text-uppercase fw-bold">
            @foreach ($headLinks as $link)
            <li>{{$link}}</li>
            @endforeach
        </ul>

        <form class="d-flex" role="search">
            <div class="input-group searchbar p-2">
                <input class="form-control border-0 p-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border-0 p-0 fw-bold" type="submit"><i class="fa-solid fa-magnifying-glass fs-4"></i></button>
            </div>
        </form>
    </div>
</nav>

<img id="jumbotron" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
