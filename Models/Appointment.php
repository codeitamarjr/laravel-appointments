<?php

namespace Codeitamarjr\LaravelAppointments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['slot_id', 'user_id'];

    public function slot() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Slot::class);
    }
}
