<?php

namespace Database\Factories;

use App\Models\CustomerLog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => mt_rand(1, 30),
            'user_id' => mt_rand(1, 4),
            'log' => $this->faker->sentence(40),
        ];
    }
}
