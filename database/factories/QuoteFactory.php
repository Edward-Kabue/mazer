<?php

namespace Database\Factories;

use App\Models\Quote;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quote_date' => $this->faker->date(),
            'expiry_date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 0, 9999),
            'status' => $this->faker->word(),
            'deal_id' => \App\Models\Deal::factory(),
        ];
    }
}
