<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ItemForm extends Form
{
    #[Validate('required|string')]
    public $name = '';
 
    #[Validate('required|string')]
    public $description = '';
}
