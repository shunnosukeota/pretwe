<?php

namespace Database\Factories;

use Brick\Math\RoundingMode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1, // つぶやきを投稿したユーザーのIDをデフォルトで1とする
            'present' => $this->faker->realText(10),
            'gift' => ("おくりもの"),
            'relation' => $this->faker->realText(10),
            'situation' => $this->faker->realText(10),
            'age' => random_int(1,100),
            'rate' => random_int(1,5),
            'ratedata' => random_int(1,100),
            'rateParameter' => random_int(1,100),
            'detail' => $this->faker->realText(100),
            'created_at' => Carbon::now()->yesterday()
        ];
    }
}
