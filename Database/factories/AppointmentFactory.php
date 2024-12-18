<?php

namespace Codeitamarjr\LaravelAppointments\src\Models;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
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
            'user_id' => \App\Models\User::factory(), // Adjust based on your user model namespace
        ];
    }
}
