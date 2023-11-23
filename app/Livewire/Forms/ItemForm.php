<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ItemForm extends Form
{
    public ?\App\Models\Item $item;

    #[Validate('required|string')]
    public $name = '';
 
    #[Validate('nullable|string')]
    public $description = '';

    public function setItem(\App\Models\Item $item)
    {
        $this->item = $item;
        $this->name = $item->name;
        $this->description = $item->description;

    }

    public function store() 
    {
        $this->validate();
        \App\Models\Item::create(
            $this->all()
        );
        $this->reset(); 
    }

    public function update()
    {
        $this->validate();
        $this->item->update(
            $this->all()
        );
    }
}
