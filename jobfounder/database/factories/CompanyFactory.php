<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;
use app\Models\NorUser;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
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
            'name' =>$name=$this->faker->name().'Company',
            'slug' =>Str::slug($name, '-'),
            'address' =>$this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->domainName(),
            'logo' =>'avatar/logo.png',
            'cover_photo' => 'cover/pic.jpg',
            // 'slogan' =>'learn-earn and grow',
            'description' =>$this->faker->text()
        ];

}
}
