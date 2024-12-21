<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Reply::class;
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function withParams($postId, $userId, $description)
    {
        return $this->state(function (array $attributes) use ($postId, $userId, $description) {
            return [
                'postId' => $postId ?? $attributes['postId'],
                'userId' => $userId ?? $attributes['userId'],
                'description' => $description ?? $attributes['description'],
            ];
        });
    }
}
