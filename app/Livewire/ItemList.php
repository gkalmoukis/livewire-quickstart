<?php

namespace App\Livewire;

use Livewire\Component;

class ItemList extends Component
{

    public $items = [];
    public $name = '';
    public $description = '';

    public function mount()
    {
        $this->items = \App\Models\Item::all();
    }
    
    public function render()
    {
        return view('livewire.item-list');
    }

    public function create()
    {
        \App\Models\Item::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->name = '';
        $this->description = '';

        $this->items = \App\Models\Item::all();
    }
}
