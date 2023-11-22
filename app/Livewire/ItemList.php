<?php

namespace App\Livewire;

class ItemList extends \Livewire\Component
{
    public \Illuminate\Support\Collection $items;
    public \App\Data\ItemData $item;
    public \App\Livewire\Forms\ItemForm $form;

    public function mount()
    {
        $this->items = \App\Data\ItemData::collection(\App\Models\Item::all())->toCollection();
    }

    public function render()
    {
        return view('livewire.item-list');
    }

    public function save()
    {
        $this->validate();

        $item = \App\Models\Item::create($this->form->all());

        $this->items = \App\Data\ItemData::collection(\App\Models\Item::all())->toCollection();
    }
}
