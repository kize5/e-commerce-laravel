@extends('components.layoutFront')

@section('content')
    {{--Navbar Accueil--}}
    <div class="contain_all">
        <div class="conteneur-nav">
            <ul class="lst-nav">
                <li class="myButton2"><a href="{{ url('/product') }}"
                                         data-text="VR">VR (prod)</a></li>
                <li class="myButton2 bnt-travel"><a href="{{ url
        ('/product') }}"
                                                    data-text="Voyage">Voyage (prod)</a></li>
                <li class="myButton2"><a href="{{url('/product/{id}')}}"
                                         data-text="Services">Services (prod)</a></li>
            </ul>
        </div>
    </div>



    <div id="title">
        <h1 id="name">eTravel v2.0.1</h1>
        <h2 id="slogan">Explorer le monde autrement (prod)</h2>
    </div>

@endsection
