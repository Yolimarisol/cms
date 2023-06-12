<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Type;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VacanciesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */

    public function a_user_can_create_a_vacancy()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->jobTitle(),
            'companies_id'=> Company::factory(),
            'types_id'=> Type::all()->random(number:1)->first()->id,
            'address'=> $this->faker->address(),
            'requirements'=>$this->faker->paragraph(),
            'expedition_date' =>now(),
            'state' => 1,
            'responsibilities'=> $this->faker->paragraph(),
            'description'=>$this->faker->paragraph(),
            'slug' => $this->faker->slug(),
        ];

        $this->post('/vacancies', $attributes)->assertRedirect('/vacancies');

        $this->assertDatabaseHas('vacancies',$attributes);

        $this->get('/vacancies')->assertSee($attributes['title']);
    }
}
