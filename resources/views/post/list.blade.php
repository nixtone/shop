@extends('design')

@section('content')
    <div id="post_list">
        @foreach($posts as $post)
        <div class="item">
            <h3 class="title">{{ $post->name }}</h3>
            <div class="tag_area">
                <a href="" class="tag">тест</a>
                <a href="" class="tag">сознание</a>
                <a href="" class="tag">проверка</a>
            </div>
            <div class="data">{{ $post->created_at }}</div>
            <div class="anons">{{ $post->anons }}</div>
            <a href="/post/{{ $post->translit }}" class="more">Подробнее</a>
        </div>
        @endforeach
    </div>
@endsection
