<?php

namespace App\Livewire;

class ItemShow extends \Livewire\Component
{
    public \App\Data\ItemData $item;
    public \App\Livewire\Forms\ItemForm $form;

    public function mount(int $id)
    {
        $this->item = \App\Data\ItemData::from(\App\Models\Item::find($id));
        $this->form->setItem(\App\Models\Item::find($id));
    }

    public function render()
    {
        return view('livewire.item-show');
    }

    public function update()
    {
        $this->form->update(); 
        $this->items = \App\Data\ItemData::collection(\App\Models\Item::all())->toCollection();
    }
}
