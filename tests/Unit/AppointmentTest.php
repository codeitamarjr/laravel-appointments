<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Codeitamarjr\LaravelAppointments\Models\Slot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Codeitamarjr\LaravelAppointments\Models\Appointment;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_belongs_to_a_slot()
    {
        $slot = Slot::factory()->create();

        $slot->appointments()->create([
            'participant_id' => 1,
            'participant_type' => 'participant',
        ]);

        $appointment = Appointment::factory()->create();

        $this->assertNotNull($appointment->slot);
    }

    /** @test */
    public function it_belongs_to_a_participant()
    {
        $slot = Slot::factory()->create();

        $slot->appointments()->create([
            'participant_id' => 1,
            'participant_type' => 'participant',
        ]);

        $appointment = Appointment::factory()->create();

        $this->assertNotNull($appointment->participant);
    }
}
