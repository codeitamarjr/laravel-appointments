<?php

return [
    'default_duration' => 30, // Default duration for events in minutes
    'notification_class' => \Codeitamarjr\LaravelAppointments\Notifications\AppointmentNotification::class,
    'models' => [
        'event' => \Codeitamarjr\LaravelAppointments\Models\Event::class,
        'slot' => \Codeitamarjr\LaravelAppointments\Models\Slot::class,
        'appointment' => \Codeitamarjr\LaravelAppointments\Models\Appointment::class,
    ],
];

