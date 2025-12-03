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
        Schema::create('certificates', function (Blueprint $table) {
             $table->id();
             $table->string('title'); // e.g., "Laravel 10 From Scratch"
             $table->string('issuing_organization'); // e.g., "Udemy", "Coursera"
             $table->date('date_issued'); // The date you earned it
             $table->string('image_path')->nullable(); // A screenshot/image of the certificate
             $table->string('credential_url')->nullable(); // A link to verify the certificate online
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
