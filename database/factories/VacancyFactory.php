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
            'title' => $this->faker->textsentence(),
            'companies_id'=> Company::factory(),
            'types_id'=> Type::factory(),
            'address'=> $this->faker->address(),
            'requirements'=>'<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'deletion_date'=>now(),
            'expedition_date' =>now(),
            'state' => 1,
            'responsibilities'=>'<p>' . implode('</p><p>', $this->faker->paragraphs(1)) . '</p>',
            'description'=>'<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'slug' => $this->faker->slug(),
        ];
    }
}
