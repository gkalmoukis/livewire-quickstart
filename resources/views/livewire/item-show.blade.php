<div>
    
    {{-- <h1>{{$item->name}}</h1>
    <p>{{$item->description}}</p> --}}

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
