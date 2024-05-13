<?php

namespace Database\Factories;

use App\Models\Deal;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => $this->faker->randomNumber(1),
            'probability' => $this->faker->randomNumber(1),
            'expected_close_da' => $this->faker->date(),
            'notes' => $this->faker->text(255),
            'contact_id' => \App\Models\Contact::factory(),
            'organization_id' => \App\Models\Organization::factory(),
            'deal_stage_id' => \App\Models\DealStage::factory(),
        ];
    }
}
