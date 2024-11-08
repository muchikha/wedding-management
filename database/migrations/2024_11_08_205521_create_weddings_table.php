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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // Name of the wedding event
            $table->date('date');                 // Date of the wedding
            $table->time('time');                 // Time of the wedding
            $table->string('venue');              // Venue of the wedding
            $table->integer('available_seats');   // Number of available seats for guests
            $table->timestamps();                 // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weddings');
    }
};
