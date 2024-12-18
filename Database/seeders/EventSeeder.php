<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Codeitamarjr\LaravelAppointments\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory(5)
            ->hasSlots(3)
            ->hasSlots(3, [
                'attendees_limit' => 5
            ])->create();
    }
}
