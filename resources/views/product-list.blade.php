@extends('components.layoutFront')
@section('content')
    <div id="carouselPromo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="1" class="d-block w-100" src="storage/image/Flyer1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img id="2" class="d-block w-100" src="storage/image/Flyer2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img id="3" class="d-block w-100" src="storage/image/Flyer3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselPromo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPromo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <div id="searchbar" class="item search right" tabindex="0">
        <div class="search-group">
            <select>
                <option value="all">All</option>
                <option value="all">Voyage</option>
                <option value="all">Réalité virtuel</option>
                <option value="all">Nos Promos</option>
            </select>
            <input type="text">
            <i class="material-icons search-icon">
                Q
            </i>
        </div>
    </div>

    <h1 id="Vr">Voyage</h1>

    <div class="Voyage">
        @foreach($products as $product)
            <div id="Voyage1">
                <img src="https://imgs.search.brave.com/fyqk-Ycyx0_SxQHAtKdJr9MVxaUvklRSkz-kDLffwaE/rs:fit:660:803:1/g:ce/aHR0cHM6Ly92b3lh/Z2Utb25pcmlxdWUu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE5LzEyLzAyY2Q3/ZDMyLmpwZw"
                     id="PhotoParis" alt="Photo Paris">
                <h2>{{$product->name}}</h2>
                <h3>{{$product->description}}</h3>
                <a href="{{ route('id_product', ['id' => $product->id]) }}">
                    <button class="myButton">{{$product->price}}$</button>
                </a>
            </div>
        @endforeach
    </div>


    <h1 id="Vr">VR</h1>
    <div class="VR">
        <div id="VR1">
            @foreach($products as $product)
                <div id="Voyage1">
                    <img src="https://imgs.search.brave.com/fyqk-Ycyx0_SxQHAtKdJr9MVxaUvklRSkz-kDLffwaE/rs:fit:660:803:1/g:ce/aHR0cHM6Ly92b3lh/Z2Utb25pcmlxdWUu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE5LzEyLzAyY2Q3/ZDMyLmpwZw"
                         id="PhotoParis" alt="Photo Paris">
                    <h2>{{$product->name}}</h2>
                    <h3>{{$product->description}}</h3>
                    <a href="{{ route('id_product', ['id' => $product->id]) }}">
                        <button class="myButton">{{$product->price}}$</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
