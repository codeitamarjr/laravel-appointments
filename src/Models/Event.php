<?php

namespace Codeitamarjr\LaravelAppointments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'duration',
        'max_attendees'
    ];

    public function slots()
    {
        return $this->hasMany(config('laravel-appointments.models.slot'));
    }

    protected static function newFactory()
    {
        return \Codeitamarjr\LaravelAppointments\Database\Factories\EventFactory::new();
    }
}
