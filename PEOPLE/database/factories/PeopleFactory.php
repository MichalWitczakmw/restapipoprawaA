<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    public function definition()
    {
            return [
                'Name' => fake()->name(),
                'LastName'=>fake()->lastName(),
                'Street'=>fake()->streetName
            ];
    }
}
