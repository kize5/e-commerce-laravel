@php
    use App\Http\Controllers\Backoffice\ProductController;
    use App\Models\Product;
@endphp

@extends('components.layoutBack')

@section('content')
    <style>.myButton {
            box-shadow: 5px 8px 9px -3px;
            font-size: 12px;
            padding: 10px 25px;
        }</style>
    <div>
        <h1>Liste produits</h1>


    </div>
    <div class="dash_container_button">
        <table class="table table-dark table-bordered">
            <thead>
            <tr><th scope="col">
                    <a href="{{route('backoffice.product.create')}}">
                        <button class="myButton Tab">Create</button>
                    </a></th></tr>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->description}}</td>


                    <td>
                        <a href="{{ action([ProductController::class, 'update'], $product->id) }}">
                            <button class="myButton Tab">Update
                            </button>
                        </a>

                        <a href="{{ action([ProductController::class, 'delete'], $product->id) }}">
                            <button class="myButton Tab">Delete
                            </button>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
