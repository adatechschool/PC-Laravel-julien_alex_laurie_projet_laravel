<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $fillable = [
        'description',
        'img_url',
        'user_id',
    ];

    public function definition()
    {
            return [
                'description' => "Mon chat est trop mignon",
                'img_url' => $this->faker->imageUrl(640, 480, 'cats'),
                'user_id' => 1
            ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
