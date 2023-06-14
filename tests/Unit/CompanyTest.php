<?php

namespace Tests\Unit;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function company_has_vacancy()
    {
        $company = Company::factory()->create();
        $this->assertInstanceOf(Collection::class, $company->vacancies);
    }

    public function company_has_users()
    {
        $company = User::factory()->create();
        $this->assertInstanceOf(Collection::class, $company->users);
    }
}
