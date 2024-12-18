<?php

namespace Codeitamarjr\LaravelAppointments\Database\Factories;

use Codeitamarjr\LaravelAppointments\Models\Slot;
use Codeitamarjr\LaravelAppointments\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
{
    protected $model = Slot::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => Event::factory(),
            'start_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'end_time' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'attendees_limit' => $this->faker->randomElement([null, 5, 10]),
        ];
    }
}
