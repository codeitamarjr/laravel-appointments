<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Codeitamarjr\LaravelAppointments\Models\Appointment;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_belongs_to_a_slot()
    {
        $appointment = Appointment::factory()->create();

        $this->assertNotNull($appointment->slot);
    }

    /** @test */
    public function it_belongs_to_a_participant()
    {
        $appointment = Appointment::factory()->create();

        $this->assertNotNull($appointment->participant);
    }
}
