<?php

namespace Codeitamarjr\LaravelAppointments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id', // The ID of the user who owns the event
        'owner_type', // The type of the user who owns the event
        'title',
        'description',
        'duration',
        'max_attendees'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) \Illuminate\Support\Str::uuid();
        });
    }
    
    /**
     * Define the polymorphic relationship with the owner.
     */
    public function owner()
    {
        return $this->morphTo(config('laravel-appointments.relationships.owner', 'owner'));
    }

    public function slots()
    {
        return $this->hasMany(\Codeitamarjr\LaravelAppointments\Models\Slot::class);
    }

    protected static function newFactory()
    {
        return \Codeitamarjr\LaravelAppointments\Database\Factories\EventFactory::new();
    }
}
