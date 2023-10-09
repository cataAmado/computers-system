<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'os' => $this->faker->word(),
            'ram' => $this->faker->word(),
            'price' => $this->faker->randomFloat(1500000, 0, 3000000),
            'storage' => $this->faker->word(),
            'monitor' => $this->faker->word(),
            'purchase_date' => $this->faker->date(),
        ];
    }
}
