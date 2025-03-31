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
            $table->string('titel');
            $table->string('type');
            $table->date('datum');
            $table->string('start_tijd');
            $table->string('eind_tijd');
            $table->string('locatie');
            $table->integer('max_deelnemers')->nullable();
            $table->text('beschrijving');
            $table->string('contact_naam');
            $table->string('contact_email');
            $table->string('contact_telefoon')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('event_volunteer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->foreignId('volunteer_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_volunteer');
        Schema::dropIfExists('events');
    }
};
