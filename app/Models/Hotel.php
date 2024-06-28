<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamar(): HasMany
    {
        return $this->hasMany(Kamar::class, 'hotel_id');
    }

    public function reservasi(): HasMany
    {
        return $this->hasMany(Reservasi::class, 'hotel_id');
    }
}
