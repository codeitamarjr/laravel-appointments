<?php

namespace codeitamarjr\appointify\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = ['event_id', 'start_time', 'end_time', 'attendees_limit'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
