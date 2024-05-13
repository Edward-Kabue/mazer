<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_title' => $this->faker->text(255),
            'date' => $this->faker->date(),
            'notes' => $this->faker->text(255),
            'status' => $this->faker->word(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
