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
    Schema::create('vendors', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('name'); // Vendor name
        $table->string('service'); // Type of service provided by the vendor (e.g., catering, photography)
        $table->string('contact'); // Contact number or person
        $table->string('email')->unique(); // Vendor email (unique)
        $table->timestamps(); // Created at and updated at timestamps
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
