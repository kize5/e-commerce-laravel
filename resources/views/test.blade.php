
@extends('components.layoutFront')
@section('content')

{{--    -------------- one to one with if ------------ <br>--}}

{{--    @foreach($users as $user)--}}
{{--       // {{$user->first_name}}  {{$user->last_name}} : <br>--}}
{{--       @if(isset($user->order->id) )--}}
{{--           @foreach($user->order as $order)--}}
{{--               {{dd($user->order->id)}}--}}
{{--               @if(($user->id = $user->order->id))--}}
{{--                   {{$user->order->id}} <br>--}}
{{--               @endif--}}
{{--           @endforeach--}}
{{--       @endif--}}
{{--    @endforeach--}}

    <br>
    -------------- many to many ------------ <br>
    <br>
    @foreach ($products as $product)
        @foreach($product->order as $order)
            {{$order->id_users}}
        @endforeach
    @endforeach

    -------------- many to many ------------ <br>

    @foreach($orders as $order)
        id commande : {{$order->id}} //  id_user {{$order->id_users}}

{{--         @if (isset())--}}
        @foreach($order->product as $product)

            nom du produit{{$product->name}} <br>
        @endforeach
    @endforeach

    <br>
    <p>-----------------------------</p>
    <br>

    -------------- many to one ------------ <br>

    @foreach($products as $product)
        {{$product->name}} = {{$product->category->name}} //
    @endforeach

    <br>
    <p>-----------------------------</p>
    <br>

-------------- One to many ------------ <br>

    @foreach($categories as $category)
        <h2>Catégorie : {{$category->id}}</h2>
        @foreach($category->product as $product)
          {{ $product->name}} -
        @endforeach
    @endforeach

    <br>
    <p>-----------------------------</p>
    <br>

----------- One to one relationship -------------- <br>

    @foreach($users as $user)
        <p>{{$user->first_name}} : {{$user->email}} : {{ $user->user_adress->city}}</p>
    @endforeach

    <br>
<p>-----------------------------</p>
    <br>

    ----------- inversed One to one relationship -------------- <br>

    @foreach($adresses as $adress)
        <p>{{$adress->city}} : {{$adress->user->first_name}}</p>
    @endforeach

@endsection
