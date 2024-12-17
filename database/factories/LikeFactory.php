<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function withParams($postId, $userId)
    {
        return $this->state(function (array $attributes) use ($postId, $userId) {
            return [
                'postId' => $postId ?? $attributes['postId'],
                'userId' => $userId ?? $attributes['userId'],
            ];
        });
    }
}
