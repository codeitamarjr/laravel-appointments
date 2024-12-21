<?php

namespace Codeitamarjr\LaravelAppointments\Database\Seeders;

use Illuminate\Database\Seeder;
use Codeitamarjr\LaravelAppointments\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 events, each with 3 slots
        Event::factory()
            ->count(5)
            ->hasSlots(3, ['attendees_limit' => 5])
            ->create();
    }
}
