<?php

namespace App\Livewire;

class ItemList extends \Livewire\Component
{
    public \Illuminate\Support\Collection $items;
    public \App\Data\ItemData $item;
    public \App\Livewire\Forms\ItemForm $form;

    public function mount()
    {
        $items = \App\Models\Item::all();
        $this->items = \App\Data\ItemData::collection($items)->toCollection();
    }

    public function render()
    {
        return view('livewire.item-list');
    }

    public function save()
    {
        $this->form->store(); 
        $this->redirectRoute('index');
    }

    public function delete($id)
    {
        $item = \App\Models\Item::findOrFail($id);
        $item->delete();
        $this->redirectRoute('index');
    }
}
