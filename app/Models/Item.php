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

    protected $appends = [
        'status'
    ];

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }

    public function getStatusAttribute()
    {
        return $this->statuses()->orderBy('created_at', 'desc')->first();
    }
}
