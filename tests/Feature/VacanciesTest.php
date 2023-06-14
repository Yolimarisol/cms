<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Type;
use App\Models\Vacancy;
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

    public function a_user_can_view_a_vacancy()
    {
        $this->withoutExceptionHandling();

        $vacancy = Vacancy::factory()->create();

        $this->get($vacancy->path())
            ->assertSee($vacancy->title)
            ->assertSee($vacancy->companies_id)
            ->assertSee($vacancy->types_id)
            ->assertSee($vacancy->address)
            ->assertSee($vacancy->requirements)
            ->assertSee($vacancy->expedition_date)
            ->assertSee($vacancy->state)
            ->assertSee($vacancy->responsibilities)
            ->assertSee($vacancy->description)
            ->assertSee($vacancy->slug)
            ->assertSee($vacancy->created_at);
    }

    /** @test */

    public function a_vacancy_requires_a_title()
    {
        $attributes = Vacancy::factory()->raw(['title'=>'']);
        $this->post('/vacancies', [$attributes])->assertSessionHasErrors('title');
    }

    /** @test */

    public function a_vacancy_requires_a_companies_id()
    {
        $this->withoutExceptionHandling();
        $attributes = Vacancy::factory()->raw(['companies_id'=>'integer']);
        $this->post('/vacancies', [$attributes])->assertSessionHasErrors('companies_id');
    }

    /** @test */

    public function a_vacancy_requires_a_types_id()
    {
        $this->withoutExceptionHandling();
        $attributes = Vacancy::factory()->raw(['types_id'=>'integer']);
        $this->post('/vacancies', [])->assertSessionHasErrors('types_id');
    }

    /** @test */

    public function a_vacancy_requires_a_address()
    {
        $attributes = Vacancy::factory()->raw(['address'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('address');
    }

    /** @test */

    public function a_vacancy_requires_a_requirements()
    {
        $attributes = Vacancy::factory()->raw(['requirements'=>'text']);
        $this->post('/vacancies', [])->assertSessionHasErrors('requirements');
    }

    /** @test */

    public function a_vacancy_requires_a_expedition_date()
    {
        $attributes =Vacancy::factory()->raw(['expedition_date'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('expedition_date');
    }

    /** @test */

    public function a_vacancy_requires_a_state()
    {
        $attributes = Vacancy::factory()->raw(['state'=>'integer']);
        $this->post('/vacancies', [])->assertSessionHasErrors('state');
    }

    /** @test */

    public function a_vacancy_requires_a_responsibilities()
    {
        $attributes = Vacancy::factory()->raw(['responsibilities'=>'text']);
        $this->post('/vacancies', [])->assertSessionHasErrors('responsibilities');
    }

    /** @test */

    public function a_vacancy_requires_a_description()
    {
        $attributes = Vacancy::factory()->raw(['description'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('description');
    }

    /** @test */

    public function a_vacancy_requires_a_slug()
    {
        $attributes = Vacancy::factory()->raw(['slug'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('slug');
    }

    /** @test */

    public function a_vacancy_requires_a_created_at()
    {
        $attributes = Vacancy::factory()->raw(['created_at'=>'string']);
        $this->post('/vacancies', [])->assertSessionHasErrors('created_at');
    }

}
