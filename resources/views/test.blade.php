
@extends('components.layoutFront')
@section('content')

{{---------------- One to many --------------}}

    @foreach($categories as $category)
        <h2>{{$category->id}}</h2>
        @foreach($category->product as $product)
            {{ $product->name }} <br>
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
