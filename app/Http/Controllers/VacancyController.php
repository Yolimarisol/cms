<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Requests\NewVacancyRequest;

class VacancyController extends Controller
{
    public function index()
    {
        return view('vacancies.index', [
            'vacancies' => Vacancy::latest()->filter(
                        request(['search', 'type', 'company'])
                    )->paginate(9)->withQueryString()
        ]);
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
