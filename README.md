# Laravel Appointments

Laravel Appointments is a package for managing appointments in your Laravel application. It provides a simple and flexible way to handle appointment scheduling, rescheduling, and cancellations.

## Installation

To install the package, use Composer:

```bash
composer require codeitamarjr/laravel-appointments
```

After installing the package, publish the configuration file:

```bash
php artisan vendor:publish --provider="Codeitamarjr\LaravelAppointments\LaravelAppointmentServiceProvider" --tag=config
php artisan vendor:publish --provider="Codeitamarjr\LaravelAppointments\LaravelAppointmentServiceProvider" --tag=migrations
```

Optionally, you can publish the factories and tests:

```bash
php artisan vendor:publish --provider="Codeitamarjr\LaravelAppointments\LaravelAppointmentServiceProvider" --tag=factories
php artisan vendor:publish --tag=tests
```

Run the migrations to create the necessary database tables:

```bash
php artisan migrate
```

Run the database seeds to populate the database with sample data:

```bash
php artisan db:seed --class=Codeitamarjr\\LaravelAppointments\\Database\\Seeders\\EventSeeder
```

## Usage

### Creating an Appointment

To create an appointment, use the `Appointment` model:

```php
use CodeItamarJr\LaravelAppointments\Models\Appointment;

$appointment = Appointment::create([
    'user_id' => $userId,
    'start_time' => '2023-10-01 10:00:00',
    'end_time' => '2023-10-01 11:00:00',
    'description' => 'Consultation',
]);
```

### Rescheduling an Appointment

To reschedule an appointment, update the `start_time` and `end_time` fields:

```php
$appointment->update([
    'start_time' => '2023-10-01 12:00:00',
    'end_time' => '2023-10-01 13:00:00',
]);
```

### Cancelling an Appointment

To cancel an appointment, delete the record:

```php
$appointment->delete();
```

## Configuration

You can customize the package by editing the configuration file located at `config/laravel-appointments.php`.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
