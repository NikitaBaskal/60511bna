<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'duration'];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

    public function halls()
    {
        return $this->belongsToMany(Hall::class, 'hall_movie'); // связь многие ко многим
    }
}
