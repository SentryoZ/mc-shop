<?php

namespace Database\Factories;

use App\Models\UserAgreements;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserAgreementsFactory extends Factory
{
    protected $model = UserAgreements::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'index' => $this->faker->randomNumber(),
            'type' => $this->faker->randomNumber(),
            'content' => $this->faker->word(),
        ];
    }
}
