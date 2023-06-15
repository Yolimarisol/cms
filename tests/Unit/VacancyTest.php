<?php

namespace Tests\Unit;

use App\Models\Vacancy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class VacancyTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */

    public function it_has_a_path()
    {
        $vacancy = Vacancy::factory()->create();
        $this->assertEquals('/vacancies/'. $vacancy->id ,$vacancy->path());
    }
}
