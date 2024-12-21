<?php

namespace Codeitamarjr\LaravelAppointments\Traits;

use Codeitamarjr\LaravelAppointments\Models\Appointment;

trait HasAppointments
{
    /**
     * Define the polymorphic relationship with appointments.
     */
    public function appointments()
    {
        return $this->morphMany(Appointment::class, 'participant');
    }
}
