<?php

namespace Codeitamarjr\LaravelAppointments\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'duration', 'max_attendees'];

    public function slots()
    {
        return $this->hasMany(config('laravel-appointments.models.slot'));
    }
}
