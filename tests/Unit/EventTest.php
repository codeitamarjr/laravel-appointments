<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Codeitamarjr\LaravelAppointments\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_an_event()
    {
        $event = Event::factory()->create(['title' => 'Test Event']);

        $this->assertDatabaseHas('events', ['title' => 'Test Event']);
    }

    #[Test]
    public function it_can_have_slots()
    {
        $event = Event::factory()->create();
        $event->slots()->createMany([
            ['start_time' => now(), 'end_time' => now()->addMinutes(30), 'attendees_limit' => 5],
            ['start_time' => now()->addHours(1), 'end_time' => now()->addHours(1)->addMinutes(30), 'attendees_limit' => 5],
        ]);

        $this->assertCount(2, $event->slots);
    }
}
