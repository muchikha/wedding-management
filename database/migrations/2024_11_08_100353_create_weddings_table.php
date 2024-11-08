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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('name');            // Name of the wedding (e.g., Couple's name)
            $table->date('date');              // Date of the wedding
            $table->time('time');              // Time of the wedding
            $table->string('venue');           // Venue of the wedding
            $table->integer('available_seats'); // Number of available seats for the wedding
            $table->timestamps();
        });
    }};
    