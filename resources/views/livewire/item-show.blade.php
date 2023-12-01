<div> 
    <div>
        <div class="px-4 sm:px-0">
          <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $item->name }}</h3>
          <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{ $item->description }}</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">{{ __('id') }}</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$item->id}}</dd>
            </div>
           
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">{{ __('created_at') }}</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$item->created_at}}</dd>
            </div>
           
          </dl>
        </div>
      </div>   
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
