<?php

namespace App\Livewire;

use Livewire\Component;

class ItemList extends Component
{

    public $items = [];

    public function mount()
    {
        $this->items = \App\Models\Item::all();
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
