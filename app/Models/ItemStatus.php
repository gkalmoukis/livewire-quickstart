<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemStatus extends Pivot
{
    protected $fillable = [
        'item_id', 
        'status_id'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
