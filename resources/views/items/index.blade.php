<h1>商品一覧</h1>
<div>
    @foreach($items as $item)
        <a href="{{ route('items.show', $item) }}">
            <h2>{{ $item->name }}</h2>
            <p>{{ $item->description }}</p>
            <img src="{{ $item->images->first()['url'] }}">
        </a>
    @endforeach
</div>