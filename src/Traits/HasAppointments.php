<?php

namespace Codeitamarjr\LaravelAppointments\Traits;

use Codeitamarjr\LaravelAppointments\Models\Event;
use Codeitamarjr\LaravelAppointments\Models\Appointment;

trait HasAppointments
{
    /**
     * Define a polymorphic relationship to events.
     */
    public function events()
    {
        return $this->morphMany(Event::class, 'owner');
    }
    
    /**
     * Define the polymorphic relationship with appointments.
     */
    public function appointments()
    {
        return $this->morphMany(Appointment::class, 'participant');
    }
}
