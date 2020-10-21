<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => mt_rand(1, 3),  // ショップIDは１が本店、２が名古屋、３が大阪 。
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'postal' => $this->faker->postcode,
            'address' => $this->faker->address,
            'birthdate' => $this->faker->dateTimeBetween('-90 years', '-18 years'),// 18歳から90歳までの誕生日を生成
            'phone' => $this->faker->phoneNumber,
            'kramer_flag' => 0,  // クレーマーフラグ とりあえず全員 0 にしておく
        ];
    }
}
