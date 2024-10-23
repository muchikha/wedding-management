<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('guests', function (Blueprint $table) {
        $table->id();  // Primary key
        $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Foreign key to events table
        $table->string('name');
        $table->string('email');
        $table->enum('RSVP_status', ['yes', 'no', 'maybe']);
        $table->string('dietary_preferences')->nullable();  // Optional field
        $table->timestamps();  // created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
