<div>
    @foreach($items as $item)
        <div>{{ $item->name }} {{ $item->status?->name }} {{ $item->status?->color }}</div>
    @endforeach
    <div>
        <form wire:submit.prevent="create">
            <input type="text" wire:model="name">
            <input type="text" wire:model="description">
            <button type="submit">{{__('store')}}</button>
        </form>
    </div>
</div>