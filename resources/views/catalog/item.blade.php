@extends('design')

@section('content')
    <div id="catalog_item">
        <div class="preview_area">
            <img src="/public/static/images/catalog/{{ $product->id }}.png" alt="" class="preview bimg">
        </div>
        <div class="inner">
            <h1 class="title">{{ $product->name }}</h1>
            <div class="price_area">
                <div class="price">{{ $product->price }} руб.</div>
                <a href="" class="in_cart">В корзину</a>
            </div>
            <div class="descr">
                {{ $product->descr }}
            </div>
        </div>
    </div>
@endsection
