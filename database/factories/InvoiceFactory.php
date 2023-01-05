<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Book;
use App\Models\ShippingMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'book_id' => Book::factory(),
            'amount' => $this->faker->numberBetween(1, 100),
            'shipping_method_id' => $this->faker->numberBetween(1, 3),
            'order_date' => $this->faker->dateTimeThisDecade()
        ];
    }
}
