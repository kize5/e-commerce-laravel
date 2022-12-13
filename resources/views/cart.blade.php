@extends('components.layoutFront')

@section('content')
    <div class="all_box">
        <h1>C A R T</h1>
        <section id="CartProducts">
            {{--Exemple Carte Produit (START)--}}

                @foreach($cart->products as $product)
            <div class="CartProductCard">
                <div class="CartAlignPhoto">
                    <a href="{{route('id_product', ['id' => $product->id])}}"> {{--URL Produit--}}
                        <img id="imgCart" src="{{$product->image}}"
                             alt="Image d'une personne portant un masque de VR 'eTravel'" !>
                    </a>
                    <div class="CartNamePrice">
                        <h2 class="CartProductName">
                            {{$product->name}}
                        </h2>
                        <div class="CartProductLeftSide">
                            <p>
                                {{$product->price}} $
                            </p>
                            <div id="CartNbItems">
                                <button
                                        id="CartSubtractButton"
                                        type="button">-
                                </button>
                                <div class="qtyNumberCart">

                                    {{$product->pivot->quantity}}

                                </div>
                                <button
                                        id="CartPlusButton"
                                        type="button">+
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach
{{--            @endforeach--}}
            {{--Exemple Carte Produit (END)--}}

        </section>

        <section id="CartBuyPart">
            <div>
                <form id="CartFormBuy" method="post" action="{{route('thanks')}}">
                    @csrf
                    <label for="CartDiscountCode"></label>
                    <input
                            type="text"
                            name="discount"
                            id="CartDiscountCode"
                            placeholder=" ENTER A DISCOUNT CODE :"
                    >
                    <button
                            class="CartButton"
                            id="CartDiscountCodeButton"
                            type="button">APPLY CODE
                    </button>
                    <p id="CartAlertDiscount">
                        /!\ "PROMO" code valide -25% /!\
                    </p>
                    <p id="CartPrice">{{$totals}} $</p>

                    <input type="hidden" name="id" value="{{$cart->id}}">
                    <input class="myButton" type="submit" value="Buy"/>
{{--                    <a href="{{route('thanks')}}" class="CartButton" id="CartBuyButton" type="button">BUY</a>--}}
                </form>
            </div>
        </section>
    </div>


@endsection
