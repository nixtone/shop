@extends('design')

@section('content')
    <div id="post_item">

        <h3 class="title">{{ $post->name }}</h3>
        <div class="tag_area">
            <a href="" class="tag">тест</a>
            <a href="" class="tag">сознание</a>
            <a href="" class="tag">проверка</a>
        </div>
        <div class="data">{{ $post->created_at }}</div>
        <div class="text">
            {{ $post->text }}
        </div>
    </div>
@endsection
