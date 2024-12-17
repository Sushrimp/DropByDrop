<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        ];
    }

    public function withParams($userId, $title, $body, $image = null)
    {
        return $this->state(function (array $attributes) use ($userId, $title, $body, $image) {
            return [
                'userId' => $userId ?? $attributes['userId'],
                'title' => $title ?? $attributes['title'],
                'body' => $body ?? $attributes['body'],
                'image' => $image ?? $attributes['image'],
            ];
        });
    }
}
