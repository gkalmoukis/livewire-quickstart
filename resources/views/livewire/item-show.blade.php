<div> 
    
    {{-- <form wire:submit="updateStatus">
        
        <input type="hidden" wire:model="itemStatusForm.item_id">
        <select wire:model="itemStatusForm.status_id">
        @foreach($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
        </select>
        <button type="submit">
            Update        
        </button>
    </form> --}}

   
   
    <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
        <form wire:submit="update">
            <dl class="-my-3 divide-y divide-gray-100 text-sm">

                <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">{{__('Id')}}</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{$item->id}}</dd>
                </div>
    
              <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">{{__('Name')}}</dt>
                <dd class="text-gray-700 sm:col-span-2">
                    <input type="text" wire:model="form.name" placeholder="{{__('Item name')}}" class="mt-1 w-full border-gray-200 sm:text-sm"/>
                    @error('form.name') <span class="error">{{ $message }}</span> @enderror
                </dd>
              </div>
    
              <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">{{__('Status')}}</dt>
                <dd class="text-gray-700 sm:col-span-2"> 
                    <span class="whitespace-nowrap rounded-full bg-[{{$item->status?->color}}] px-2.5 py-0.5 text-sm">
                        {{$item->status?->name}}
                    </span>
                    {{$item->status?->created_at}}
                </dd>
              </div>
          
              <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">{{__('Created At')}}</dt>
                <dd class="text-gray-700 sm:col-span-2">{{$item->created_at}}</dd>
              </div>
          
              <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">{{__('Description')}}</dt>
                <dd class="text-gray-700 sm:col-span-2">
                    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
                    
                    <input id="inputDescription" type="hidden" wire:model="form.description">
                    <trix-editor input="inputDescription"></trix-editor>
                    @error('form.description') 
                        <span class="error">{{ $message }}</span> 
                    @enderror
                    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
                    <script>
                        const descriptionEditor = document.querySelector("#inputDescription")
                    
                        addEventListener("trix-blur", function(event) {
                            @this.set('value', descriptionEditor.getAttribute('value'))
                        })
                    </script>
                </dd>
              </div>
              
             
            </dl>
            <button type="submit">
                {{__('Save changes')}} 
                <div wire:loading>{{__('Loading')}}</div>        
            </button>
        </form>
      </div>
</div>
