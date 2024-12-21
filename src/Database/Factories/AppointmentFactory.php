<?php

namespace Codeitamarjr\LaravelAppointments\Database\Factories;

use Codeitamarjr\LaravelAppointments\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Codeitamarjr\LaravelAppointments\Models\Slot;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Codeitamarjr\LaravelAppointments\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slot_id' => Slot::factory(),
            'participant_id' => config('laravel-appointments.models.participant')::factory(),
            'participant_type' => config('laravel-appointments.relationships.participant', 'participant'),
        ];
    }
}
