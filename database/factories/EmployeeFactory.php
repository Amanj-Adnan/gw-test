<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model =Employee::class;

    public function definition()
    {
        return [
            'manager_id'=>$this->faker->biasedNumberBetween(1,1),
            'name' => $this->faker->name,
            'age' => $this->faker->biasedNumberBetween(20,63),
            'salary' => $this->faker->randomNumber(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'job-title' => $this->faker->jobTitle,
            'hired-date' => $this->faker->date,
        ];
    }
}
