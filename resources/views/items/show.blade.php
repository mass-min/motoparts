<h1>商品詳細</h1>
<a href="{{ route('items.index') }}">一覧に戻る</a>
<div>
    <div>
        <h2>{{ $item->name }}</h2>
        <p>{{ $item->description }}</p>
        <p>{{ $item->price }}円</p>
        @foreach($item->images as $image)
            <img src="{{ $image->url }}">
        @endforeach
    </div>
</div>