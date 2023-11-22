<?php

namespace App\Data;

class ItemData extends \Spatie\LaravelData\Data implements \Livewire\Wireable
{
    use \Spatie\LaravelData\Concerns\WireableData;

    public function __construct(
        public ?int $id,
        public string $name,
        public ?string $description,
        public ?\App\Data\StatusData $status,
        public ?string $created_at,
    ) {
    }
}
