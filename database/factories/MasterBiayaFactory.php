<?php

namespace Database\Factories;

use App\Models\MasterBiaya;
use Illuminate\Database\Eloquent\Factories\Factory;

class MasterBiayaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MasterBiaya::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_biaya' => random_int(000, 999),
            'biaya' => random_int(0, 9999999),
            'description' => $this->faker->sentence()
        ];
    }
}
