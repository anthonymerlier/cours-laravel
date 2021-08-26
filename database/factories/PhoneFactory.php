<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phone = $this->faker->sentence(2) . " " . $this->faker->numberBetween(2, 12);
        return [
            "name" => $phone,
            "slug" => Str::slug($phone),
            "price" => $this->faker->randomFloat(2, 99, 1900),
            "release_year" => $this->faker->numberBetween(1997, 2021),
            "brand_id" => $this->faker->numberBetween(1, 10)
        ];
    }
}
