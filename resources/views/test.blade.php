
@extends('components.layoutFront')
@section('content')

    {{---------------- many to one --------------}}

    @foreach($products as $product)
        {{$product->name}} = {{$product->category->name}} //
    @endforeach

    <br>
    <p>-----------------------------</p>
    <br>

{{---------------- One to many --------------}}

    @foreach($categories as $category)
        <h2>Catégorie{{$category->id}}</h2>
        @foreach($category->product as $product)
          {{ $product->name}} -
        @endforeach
    @endforeach

    <br>
    <p>-----------------------------</p>
    <br>

{{------------- One to one relationship ----------------}}

    @foreach($users as $user)
        <p>{{$user->first_name}} : {{$user->email}} : {{ $user->user_adress->city}}</p>
    @endforeach

    <br>
<p>-----------------------------</p>
    <br>

    {{------------- inversed One to one relationship ----------------}}

    @foreach($adresses as $adress)
        <p>{{$adress->city}} : {{$adress->user->first_name}}</p>
    @endforeach

@endsection
