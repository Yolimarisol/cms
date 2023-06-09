<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


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

        $company = Company::factory(5)->create();

        Vacancy::factory(5)->create([
            'companies_id' => $company->id,
        ]);
    }
}
