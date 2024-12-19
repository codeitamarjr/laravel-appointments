<?php

namespace Codeitamarjr\LaravelAppointments\Database\Factories;

use Codeitamarjr\LaravelAppointments\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 *  @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'duration' => $this->faker->numberBetween(15, 120),
            'max_attendees' => $this->faker->randomElement([null, 10, 20, 30]),
        ];
    }
}
