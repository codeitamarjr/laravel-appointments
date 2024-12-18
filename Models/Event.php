<?php

namespace Codeitamarjr\LaravelAppointments\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration', 'max_attendees'];

    public function slots() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Slot::class);
    }
}

