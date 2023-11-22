<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class StatusData extends \Spatie\LaravelData\Data implements \Livewire\Wireable
{
    use \Spatie\LaravelData\Concerns\WireableData;

    public function __construct(
      public string $id,
      public string $name,
      public ?string $color,
      public string $created_at
    ) {}
}
