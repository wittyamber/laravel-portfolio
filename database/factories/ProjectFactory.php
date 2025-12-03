<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4), // Generates a fake sentence with 4 words
            'slug' => fake()->unique()->slug(4), // Generates a URL-friendly, unique slug
            'description' => fake()->paragraph(5), // A fake paragraph with 5 sentences
            'technologies' => json_encode(['Laravel', 'Tailwind CSS', 'Vite']), // A sample JSON array
            'project_url' => fake()->url(),
            'repo_url' => fake()->url(),
        ];
    }
}
