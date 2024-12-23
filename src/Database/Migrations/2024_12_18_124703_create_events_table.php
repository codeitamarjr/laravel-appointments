<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->morphs('owner'); // Adds owner_id and owner_type
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('duration'); // Duration in minutes
            $table->unsignedInteger('max_attendees')->nullable(); // Null = unlimited
            $table->timestamps();

            // Indexes for polymorphic relationship
            $table->index(['owner_id', 'owner_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
