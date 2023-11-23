<div>
    
    {{-- <h1>{{$item->name}}</h1>
    <p>{{$item->description}}</p> --}}

    <div>
        <div>{{__('Item')}}</div>
        <div>{{$item->id}}</div>
        <div>{{$item->name}}</div>
        <div>{{$item->description}}</div>
        <div>{{$item->created_at}}</div>
        <div>{{__('Item')}}</div>
        <div>{{__('status')}}</div>
        <div>{{$item->status?->name}} {{$item->status?->color}} {{$item->status?->created_at}}</div>
        <div>{{__('history')}}</div>
    </div>

    <form wire:submit="update">
        <input type="text" wire:model="form.name">
        <div>
            @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <input type="text" wire:model="form.description">
        <div>
            @error('form.description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">
            Save 
            <div wire:loading>
                Loading...
            </div>        
        </button>
    </form>
</div>
