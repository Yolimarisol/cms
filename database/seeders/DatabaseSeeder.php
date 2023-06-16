<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Vacancy;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Company::factory()->create([
            'id'=>0,
            'name' => 'ninguna',
            'website' =>'',
            'description' => '',
            'members' => '',
            'address' => 0,
            'slug' => '',

        ]);
        $company = Company::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'yolandaestrada@elaniin.com',
            'role'=>0,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'company',
            'email' => 'yolamarisol@hotmail.com',
            'role'=>1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'yolanda.estrada.ats@gmail.com',
            'role'=>2,
        ]);

        $this->call(class: TypeSeeder::class);

        Vacancy::factory(15)->create([
            'companies_id' => Company::all()->random(number:1)->first()->id,
        ]);
    }
}
