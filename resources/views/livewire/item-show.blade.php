<div>    
    <h5>{{__('Item')}}</h5>
    <div>
        <div>{{$item->id}}</div>
        <div>{{$item->name}}</div>
        <div>{{$item->description}}</div>
        <div>{{$item->created_at}}</div>
    </div>
    
    <h5>{{__('status')}}</h5>
    <div>
        <div>{{$item->status?->name}} {{$item->status?->color}} {{$item->status?->created_at}}</div>
    </div>
    <form wire:submit="updateStatus">
        <input type="hidden" wire:model="itemStatusForm.item_id">
        <select wire:model="itemStatusForm.status_id">
        @foreach($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
        </select>
        <button type="submit">
            Update        
        </button>
    </form>

    <h5>{{__('edit')}}</h5>
    <div>
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
    
</div>
