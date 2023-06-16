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
            'vacancies' => Post::latest()->filter(
                        request(['search', 'category', 'author'])
                    )->paginate(18)->withQueryString()
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
