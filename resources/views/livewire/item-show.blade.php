<div>
    <h1>{{$item->name}}</h1>
    <p style="color: {{$item->status?->color}};" >{{$item->status?->name}}</p>
    <p>{{$item->description}}</p>
</div>
