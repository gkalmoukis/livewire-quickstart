<?php

namespace App\Livewire;

class ItemShow extends \Livewire\Component
{
    public \App\Data\ItemData $item;

    public function mount(int $id)
    {
        $this->item = \App\Data\ItemData::from(\App\Models\Item::find($id));
    }

    public function render()
    {
        return view('livewire.item-show');
    }
}
