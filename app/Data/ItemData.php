<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class ItemData extends Data implements \Livewire\Wireable
{
    use \Spatie\LaravelData\Concerns\WireableData;

    public function __construct(
      public string $name,
      public string $description
    ) {}
}
