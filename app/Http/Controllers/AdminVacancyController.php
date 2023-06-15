<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewVacancyRequest;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class AdminVacancyController extends Controller
{
    public function store(NewVacancyRequest $request)
    {
        $attributes = $request->validated([
            'companies_id',
            'title',
            'types_id',
            'address',
            'requirements',
            'deletion_date',
            'expedition_date',
            'state',
            'responsibilities',
            'description',
            //'image',
            'slug',
            'created_at']);

        //$attributes['companies_id'] = auth()->id();
        Vacancy::create($attributes);

        //auth()->user()->vacancies()->create($attributes);

        return redirect('/vacancies');
    }
}
