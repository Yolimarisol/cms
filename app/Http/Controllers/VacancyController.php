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
        return view('vacancies.show', [
            'vacancy' => $vacancy
        ]);
        
        // $vacancy = Vacancy::findOrFail(request('vacancy'));

        // return view('vacancies.show', compact('vacancies'));
    }


}
