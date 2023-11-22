<?php

namespace App\Livewire;

class ItemList extends \Livewire\Component
{
    public \Illuminate\Support\Collection $items;

    public function mount()
    {
        $this->items = \App\Data\ItemData::collection(\App\Models\Item::all())->toCollection();
    }
    
    public function render()
    {
        return view('livewire.item-list');
    }
}
