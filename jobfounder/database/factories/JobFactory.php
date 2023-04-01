<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id' =>$this->faker->randomDigitNotZero(1),
            'company_id' =>$this->faker->randomDigitNotZero(1),
            'title' =>$title=$this->faker->text(),
            'slug' =>Str::slug($title, '-'),
            'description' =>$this->faker->text(),
            'category_id' => $this->faker->randomDigitNotZero(1),
            'position' =>$this->faker->jobTitle(),
            'address' =>$this->faker->address(),
            'roles' =>$this->faker->text(),
            'type' =>'full time',
            'status' =>rand(0,1),
            'last_date' =>$this->faker->dateTime()

        ];
    }
}
