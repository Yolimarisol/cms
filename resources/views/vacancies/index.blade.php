@extends ('layouts.app')

@section('content')
    <div class= "display mb-3">
        <h1 class = "mautor">Vacancies</h1>

        <a href="/vacancies/create">Create a New Vacancy"</a>
    </div>
    <div class = "flex">
        @forelse ( $vacancies as $vacancy)
            <div class = "bg-white mr-4 p-5 rounded shadow w-1/3 he">
                <h3 class = "py-6">{{$vacancy->title}}</h3>
                <div class = "text-grey">{{str_limit($vacancy->description, 150)}}</div>
            </div>
        @empty
            <div>No vacancies yet.</div>

        @endforelse


    </div>
@endsection

