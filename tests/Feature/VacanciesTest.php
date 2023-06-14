<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Type;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
            'created_at' =>now(),
        ];

        $this->post('/vacancies', $attributes)->assertRedirect('/vacancies');

        $this->assertDatabaseHas('vacancies',$attributes);

        $this->get('/vacancies')->assertSee($attributes['title']);
    }

    /** @test */

    public function a_vacancy_requires_a_title()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['title'=>'']);
        $this->post('/vacancies', [$attributes])->assertSessionHasErrors('title');
    }

    /** @test */

    public function a_vacancy_requires_a_companies_id()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['companies_id'=>'integer']);
        $this->post('/vacancies', [$attributes])->assertSessionHasErrors('companies_id');
    }

    /** @test */

    public function a_vacancy_requires_a_types_id()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['types_id'=>'integer']);
        $this->post('/vacancies', [])->assertSessionHasErrors('types_id');
    }

    /** @test */

    public function a_vacancy_requires_a_address()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['address'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('address');
    }

    /** @test */

    public function a_vacancy_requires_a_requirements()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['requirements'=>'text']);
        $this->post('/vacancies', [])->assertSessionHasErrors('requirements');
    }

    /** @test */

    public function a_vacancy_requires_a_expedition_date()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['expedition_date'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('expedition_date');
    }

    /** @test */

    public function a_vacancy_requires_a_state()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['state'=>'integer']);
        $this->post('/vacancies', [])->assertSessionHasErrors('state');
    }

    /** @test */

    public function a_vacancy_requires_a_responsibilities()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['responsibilities'=>'text']);
        $this->post('/vacancies', [])->assertSessionHasErrors('responsibilities');
    }

    /** @test */

    public function a_vacancy_requires_a_description()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['description'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('description');
    }

    /** @test */

    public function a_vacancy_requires_a_slug()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['slug'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('slug');
    }

    /** @test */

    public function a_vacancy_requires_a_created_at()
    {
        $attributes = factory('App\Models\Vacancy')->raw(['created_at'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('created_at');
    }

}
