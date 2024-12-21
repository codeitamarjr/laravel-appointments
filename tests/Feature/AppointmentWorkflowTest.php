<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Codeitamarjr\LaravelAppointments\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppointmentWorkflowTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_an_event_with_slots_and_book_appointments()
    {
        // Create an Event
        $event = Event::factory()->create(['title' => 'Test Event']);

        // Add Slots to the Event
        $slots = $event->slots()->createMany([
            ['start_time' => now(), 'end_time' => now()->addMinutes(30), 'attendees_limit' => 5],
            ['start_time' => now()->addHours(1), 'end_time' => now()->addHours(1)->addMinutes(30), 'attendees_limit' => 5],
        ]);

        // Book an Appointment for the First Slot
        $slot = $slots->first();
        $slot->appointments()->create([
            'participant_id' => 1,
            'participant_type' => \App\Models\User::class,
        ]);

        // Assertions
        $this->assertDatabaseHas('events', ['id' => $event->id, 'title' => 'Test Event']);
        $this->assertDatabaseHas('slots', ['event_id' => $event->id, 'attendees_limit' => 5]);
        $this->assertDatabaseHas('appointments', ['slot_id' => $slot->id, 'participant_id' => 1]);
    }
}
