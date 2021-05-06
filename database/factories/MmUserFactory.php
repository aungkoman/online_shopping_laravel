<?php

namespace Database\Factories;

use App\Models\MmUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class MmUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MmUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "username" => $this->faker->userName,
            "password" => $this->faker->password,
            "email" => $this->faker->email,
            "phone_no" => $this->faker->phoneNumber,
            "email_verified_at" => $this->faker->dateTime,
            "phone_no_verified_at" => $this->faker->dateTime,
            "role_id" => rand(1,5)
        ];
    }
}
