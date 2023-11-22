<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function statuses()
    {
        return $this->belongsToMany(Status::class)
            ->withPivot('created_at')
            ->orderBy('pivot_created_at', 'desc');
    }

    public function latestStatus()
    {
        return $this->statuses()
            ->first();
    }
}
