<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Codeitamarjr\LaravelAppointments\Models\Slot;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SlotTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_belongs_to_an_event()
    {
        $slot = Slot::factory()->create();

        $this->assertNotNull($slot->event);
    }

    #[Test]
    public function it_can_have_appointments()
    {
        $slot = Slot::factory()->create();
        $slot->appointments()->createMany([
            ['participant_id' => 1, 'participant_type' => \App\Models\User::class],
            ['participant_id' => 2, 'participant_type' => \App\Models\User::class],
        ]);

        $this->assertCount(2, $slot->appointments);
    }
}
