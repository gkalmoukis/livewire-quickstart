<?php

namespace App\Livewire;

class ItemShow extends \Livewire\Component
{
    public \App\Data\ItemData $item;
    public $statuses;
    public \App\Livewire\Forms\ItemForm $form;

    public function mount(int $id)
    {
        $item = \App\Models\Item::with('statuses')->findOrFail($id);
        $this->statuses = \App\Models\Status::all(); // $this->statuses = \App\Data\StatusData::collection($statuses);
        $this->form->setItem($item);
        $this->item = \App\Data\ItemData::from($item);
    }

    public function render()
    {
        return view('livewire.item-show');
    }

    public function update()
    {
        $this->form->update(); 
        $this->redirectRoute('show', [
            'id' => $this->item->id
        ]);
    }
}
