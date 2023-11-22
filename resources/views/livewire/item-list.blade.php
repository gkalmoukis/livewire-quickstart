<div>
    @foreach($items as $item)
        <div>{{ $item->name }} {{ $item->status->name }} {{ $item->status->color }}</div>
    @endforeach
</div>
