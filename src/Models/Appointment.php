<?php

namespace Codeitamarjr\LaravelAppointments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot_id',
        'participant_id',
        'participant_type' //  "Owner" or "Participant"
    ];

    /**
     * Define the polymorphic relationship with the participant.
     */
    public function participant()
    {
        return $this->morphTo(config('laravel-appointments.relationships.participant', 'participant'));
    }

    /**
     * The slot that this appointment belongs to.
     */
    public function slot(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(config('laravel-appointments.models.slot'));
    }
}
