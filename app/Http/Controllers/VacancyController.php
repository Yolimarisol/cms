<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Requests\NewVacancyRequest;

class VacancyController extends Controller
{
    public function index ()
    {
        $vacancies = Vacancy::all();

        return view('vacacies.index', compact('vacancies'));
    }

    public function store (NewVacancyRequest $request)
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
            'slug']);

        Vacancy::create(request($attributes));

        return redirect('/vacancies');
    }
}
