<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['showtime_id', 'price_category', 'price'];

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }
}
