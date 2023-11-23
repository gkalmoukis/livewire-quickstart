<?php

namespace App\Livewire;

class ItemShow extends \Livewire\Component
{
    public \App\Data\ItemData $item;
    public \App\Livewire\Forms\ItemForm $form;

    public function mount(int $id)
    {
        $item = \App\Models\Item::find($id);
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
        $this->redirectRoute('show', ['id'=>$this->item->id]);
    }
}
