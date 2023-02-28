@extends('design')

@section('content')
    <div id="catalog_list">
        <div class="categories">
            <a href="" class="cat_link active">Первая</a>
            <a href="" class="cat_link">Техника</a>
            <a href="" class="cat_link">Комплектующие</a>
            <a href="" class="cat_link">Тестовые шаги</a>
            <a href="" class="cat_link">Проверка</a>
        </div>
        <div class="wrap">
            @foreach($products as $product)
            <div class="item">
                <img src="/public/static/images/catalog/{{ $product->id }}.png" alt="" class="preview bimg">
                <div class="inner">
                    <h3 class="name">{{ $product->name }}</h3>
                    <div class="price">{{ $product->price }} ₽</div>
                    <a href="/catalog/{{ $product->id }}" class="more">Подробнее</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
