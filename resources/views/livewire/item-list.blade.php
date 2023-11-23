<div>   
    @foreach($items as $item)
    <div> 
        <a href="{{route('show', $item->id)}}">{{$item->name}}</a>
        <span>{{$item->created_at}}</span>
        <button wire:click="delete({{ $item->id }})">
            {{__('delete')}}
        </button> 
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
            {{__('save')}}      
        </button>
    </form>
    <div wire:loading>
        {{__('loading')}}
    </div>
</div>