<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Requests\NewVacancyRequest;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();

        return view('vacancies.index', compact('vacancies'));
    }

    public function show(Vacancy $vacancy)
    {
       // $vacancy = Vacancy::findOrFail(request('vacancy'));

        return view('vacancy.show', compact('vacancy'));
    }

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
       // Vacancy::create($attributes);

        auth()->user()->vacancies()->create($attributes);

        return redirect('/vacancies');
    }
}
