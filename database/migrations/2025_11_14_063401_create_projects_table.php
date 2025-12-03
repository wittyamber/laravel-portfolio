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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');                  // The project's title, like "My Awesome App"
        $table->string('slug')->unique();         // A URL-friendly version of the title, must be unique
        $table->text('description');              // A long description of the project
        $table->string('image_path')->nullable(); // The path to the project's image (optional)
        $table->string('project_url')->nullable();// The link to the live project (optional)
        $table->string('repo_url')->nullable();   // The link to the GitHub repo (optional)
        $table->json('technologies')->nullable(); // A list of technologies used, like ["Laravel", "Vue"] (optional)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
