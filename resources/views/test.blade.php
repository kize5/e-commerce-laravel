@extends('components.layoutFront')
@section('content')

    {{---------------- many to one --------------}}
    <div style=" display:flex; flex-direction: column; align-items: center;">
        @foreach($products as $product)
            {{$product->name}} = {{$product->category->name}} //
        @endforeach
    </div>

    <hr style="border: 3px solid cornflowerblue">

    {{--    <br>--}}
    {{--    <p>-----------------------------</p>--}}
    {{--    <br>--}}


    {{---------------- One to many --------------}}
    <div style=" display:flex; flex-direction: column; align-items: center;">
        @foreach($categories as $category)
            <h2 style="color: red">Catégorie : {{$category->id}}</h2>
            @foreach($category->product as $product)
                {{ $product->name}}
            @endforeach
        @endforeach
    </div>
    <hr style="border: 3px solid cornflowerblue">

    {{--    <br>--}}
    {{--    <p>-----------------------------</p>--}}
    {{--    <br>--}}

    {{------------- One to one relationship ----------------}}
    <div style=" display:flex; flex-direction: column; align-items: center;">
{{--        @foreach($users as $user)--}}
{{--            <p>{{$user->first_name}} : {{$user->email}}--}}
{{--                : {{ $user->user_adress->city}}</p>--}}
{{--        @endforeach--}}
    </div>
    <hr style="border: 3px solid cornflowerblue">


    {{------------- inversed One to one relationship ----------------}}
    <div style=" display:flex; flex-direction: column; align-items: center;">
        @foreach($adresses as $adress)
            <p>{{$adress->city}} : {{$adress->user->first_name}}</p>
        @endforeach
    </div>


<hr style="border: 3px solid cornflowerblue">


{{------------- relation many to many ----------------}}
<div style=" display:flex; flex-direction: column; align-items: center;">
    @foreach($orders as $order)
        <p>{{$order->id}}</p>
        @foreach($order->product as $product)
            {{$product->name}}
        @endforeach
    @endforeach
</div>
@endsection
