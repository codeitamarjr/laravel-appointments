<?php

namespace Codeitamarjr\LaravelAppointments\Database\Factories;

use Carbon\Carbon;
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
        $startTime = $this->faker->dateTimeBetween('now', '+1 week');
        $endTime = Carbon::parse($startTime)->addMinutes($this->faker->numberBetween(15, 120));
        return [
            'event_id' => Event::factory(),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'attendees_limit' => $this->faker->randomElement([null, 5, 10]),
        ];
    }
}
