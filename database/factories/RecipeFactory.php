<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'author_id'=>$this->faker->randomElement($users),
            'title'=>$this->faker->name,
            'content'=>$this->faker->text,
            'ingredients'=>$this->faker->text,
            'url'=>$this->faker->url,
            'tags'=>$this->faker->text,
            'date'=>$this->faker->dateTime($max = 'now', $timezone = null),
            'status'=>$this->faker->text($maxNbChars = 45),
        ];
    }
}
