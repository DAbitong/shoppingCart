<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

 /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class; // to specify the corresponding model class for the factory

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->text(180),
            'price' => $this->faker->numberBetween(50, 100)
        ];
    }
}
