<div>
    @foreach($items as $item)
    <div> 
        <a href="{{route('show', $item->id)}}">{{$item->name}}</a>
    </div>
    @endforeach

    <form wire:submit="save">
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