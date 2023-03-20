@extends('components.layoutFront')

@section('content')
    {{--Navbar Accueil--}}
    <div class="contain_all">
        <div class="conteneur-nav">
                <a href="{{ url('/product') }}" data-text="VR"><button class="myButton2">VR</button></a>
            <a href="{{ url('/product') }}" data-text="Voyage"><button class="myButton2 bnt-travel">Voyage</button></a>
            <a href="{{url('/product/{id}')}}" data-text="Services"><button class="myButton2">Services</button></a>
        </div>
    </div>



    <div id="title">
        <h1 id="name">eTravel</h1>
        <h2 id="slogan">Explorer le monde autrement</h2>
    </div>

@endsection
