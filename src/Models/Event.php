<?php

namespace packages\codeitamarjr\appointify\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'duration', 'max_attendees'];

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
