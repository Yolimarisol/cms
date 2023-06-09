<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'companies_id'=> Company::factory(),
            'types_id'=> Type::all()->random(number:1)->first()->id,
            'address'=> $this->faker->address(),
            'requirements'=>$this->faker->paragraph(),
            'deletion_date'=>now(),
            'expedition_date' =>now(),
            'state' => 1,
            'responsibilities'=> $this->faker->paragraph(),
            'description'=>$this->faker->paragraph(),
            'slug' => $this->faker->slug(),
        ];
    }
}
