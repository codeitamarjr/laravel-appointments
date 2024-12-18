<?php

namespace Codeitamarjr\LaravelAppoint\Tests\Unit;

use Tests\TestCase;
use Codeitamarjr\LaravelAppointments\Models\Slot;
use Codeitamarjr\LaravelAppointments\Models\Event;

class EventTest extends TestCase
{
    /** @test */
    public function it_can_create_an_event()
    {
        $event = Event::factory()->create([
            'title' => 'Consultation',
        ]);

        $this->assertDatabaseHas('events', ['title' => 'Consultation']);
    }

    public function test_can_book_a_slot()
    {
        $slot = Slot::factory()->create();
        $appointment = $slot->appointments()->create(['user_id' => 1]);

        $this->assertDatabaseHas('appointments', ['slot_id' => $slot->id, 'user_id' => 1]);
    }
}
