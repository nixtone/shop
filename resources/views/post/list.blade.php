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
            <div class="data">2023-02-24 17:10:06</div>
            <div class="anons">О том, что утверждает собой поэзия Киплинга — воспитание джентльмена, стоического мировоззрения и олицетворения в себе чувства такта, господства и стойкости — принципиальных качеств, позволивших англосаксонской расе захватить почти весь земной шар: «Владей собой среди толпы смятенной...».</div>
            <a href="/post/item" class="more">Подробнее</a>
        </div>
        @endforeach
    </div>
@endsection
