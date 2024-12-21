<?php

namespace Codeitamarjr\LaravelAppointments\Database\Factories;

use Codeitamarjr\LaravelAppointments\Models\Appointment;
use Codeitamarjr\LaravelAppointments\Models\Slot;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'participant_id' => $this->faker->randomDigitNotNull,
            'participant_type' => $this->faker->randomElement(['owner', 'participant']),
        ];
    }
}
