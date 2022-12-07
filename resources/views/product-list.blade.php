@extends('components.layoutFront')
@section('content')
{{--    <div id="carouselPromo" class="carousel slide" data-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img id="1" class="d-block w-100" src="storage/image/Flyer1.png" alt="First slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img id="2" class="d-block w-100" src="storage/image/Flyer2.png" alt="Second slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img id="3" class="d-block w-100" src="storage/image/Flyer3.png" alt="Third slide">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a class="carousel-control-prev" href="#carouselPromo" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#carouselPromo" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <br>--}}

{{--    <div id="searchbar" class="item search right" tabindex="0">--}}
{{--        <div class="search-group">--}}
{{--            <select>--}}
{{--                <option value="all">All</option>--}}
{{--                <option value="all">Voyage</option>--}}
{{--                <option value="all">Réalité virtuel</option>--}}
{{--                <option value="all">Nos Promos</option>--}}
{{--            </select>--}}
{{--            <input type="text">--}}
{{--            <i class="material-icons search-icon">--}}
{{--                Q--}}
{{--            </i>--}}
{{--        </div>--}}
{{--    </div>--}}


<div class="box_list_front">
    <h1 id="hi_list_prod">Voyage</h1>
    <div class="Voyage">
        @foreach($products as $product)
            @if ($product->id_category === 1)
                <div id="Voyage1">
                    <img src="{{$product -> image}}" id="PhotoParis" alt="Photo Paris">
                    <h2>{{$product->name}}</h2>
                    <p id="desc_list_prod">{{$product->description}}</p>
                    <a href="{{ route('id_product', ['id' => $product->id]) }}">
                        <button class="myButton">{{$product->price}}$</button>
                    </a>
                </div>
            @endif
        @endforeach
    </div>


    <h1 id="hi_list_prod">VR</h1>
    <div class="Voyage">
        @foreach($products as $product )
            @if($product->id_category== 2)
                <div  id="Voyage1">
                    <img src="{{$product -> image}}" id="PhotoParis" alt="Photo Paris">
                    <h2>{{$product->name}}</h2>
                    <p id="desc_list_prod">{{$product->description}}</p>
                    <a href="{{ route('id_product', ['id' => $product->id]) }}">
                        <button class="myButton">{{$product->price}}$</button>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection