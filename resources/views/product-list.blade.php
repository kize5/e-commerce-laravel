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
        @foreach($products1 as $product1)
        <div id="VoyageItem">
            <img src={{$product1->image}} alt={{$product1->name}} height=200px>
            <h2>{{$product1->name}}</h2>
            <h3>{{$product1->description}}</h3>
            <a href="{{ url ('/product/'. $product1->id) }}">
                <button class="myButton">{{$product1->price}} $</button>
            </a>
        </div>
        @endforeach
    </div>


    <h1 id="Vr">VR</h1>
    <div class="VR">
        @foreach($products2 as $product2)
            <div id="VoyageItem">
                <img src={{$product2->image}} alt={{$product2->name}} height=200px>
                <h2>{{$product2->name}}</h2>
                <h3>{{$product2->description}}</h3>
                <a href="{{ url ('/product/'. $product2->id) }}">
                    <button class="myButton">{{$product2->price}} $</button>
                </a>
            </div>
        @endforeach
    </div>

@endsection
