<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brand = $this->faker->unique()->words(rand(1,2), true);
        return [
            "name" => $brand,
            "slug" => Str::slug($brand),
            "country" => $this->faker->country()
        ];
    }
}
