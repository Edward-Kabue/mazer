<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number' => $this->faker->randomNumber(),
            'invoice_date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 0, 9999),
            'contact_id' => \App\Models\Contact::factory(),
            'quote_id' => \App\Models\Quote::factory(),
            'organization_id' => \App\Models\Organization::factory(),
        ];
    }
}
