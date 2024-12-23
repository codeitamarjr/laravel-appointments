<?php

return [
    'default_duration' => 30, // Default duration for events in minutes
    'notification_class' => \Codeitamarjr\LaravelAppointments\Notifications\AppointmentNotification::class,
    'models' => [
        'owner' => Object::class, // Default owner model ID(Ex: App\Models\User::class)
        'participant' => Object::class, // Default participant model ID(Ex: App\Models\User::class)
    ],
    'relationships' => [
        'owner' => 'owner', // Default relationship name
        'participant' => 'participant', // Default relationship name
    ],
];

