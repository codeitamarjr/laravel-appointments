<?php

return [
    'default_duration' => 30, // Default duration for events in minutes
    'notification_class' => \Codeitamarjr\LaravelAppointments\Notifications\AppointmentNotification::class,
    'models' => [
        'participant' => Object::class, // Default participant model(Ex: App\Models\User::class)
    ],
    'relationships' => [
        'participant' => 'participant', // Default relationship name
    ],
];

