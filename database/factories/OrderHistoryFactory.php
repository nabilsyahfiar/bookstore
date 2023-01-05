<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderHistory>
 */
class OrderHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'invoice_id' => Invoice::factory(),
            'status_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
