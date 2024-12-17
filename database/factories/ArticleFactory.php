<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Default Article Title',
            'body' => 'This is the default content of the article.',
        ];
    }

    public function withParams($title, $body)
    {
        return $this->state(function (array $attributes) use ($title, $body) {
            return [
                'title' => $title ?? $attributes['title'],
                'body' => $body ?? $attributes['body'],
            ];
        });
    }
}
