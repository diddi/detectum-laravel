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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('naam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('stad');
            $table->string('email')->unique();
            $table->string('telefoon');
            $table->integer('actieradius');
            $table->string('ervaring')->nullable();
            $table->text('interesses')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
