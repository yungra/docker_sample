<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class DepartmentFactory extends Factory
{
    private static int $sequence = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();  //この行を追加
        return [
            'name' => '部署' . self::$sequence++,
            'manager_name' => $this->faker->name,
            'created_at' => $now,
            'updated_at' => $now,
        ];
    }
}
