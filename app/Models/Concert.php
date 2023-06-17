<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scheduled_date',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'concert_id', 'id');
    }
}
