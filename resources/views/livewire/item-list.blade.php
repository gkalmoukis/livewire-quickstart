<div>
    @foreach($items as $item)
    <div> 
        <a href="{{route('show', $item->id)}}">{{$item->name}}</a>
    </div>
    @endforeach
</div>