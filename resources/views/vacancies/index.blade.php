@extends ('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class ="flex justify-between w-full items-center">
            <h1 class = "mautor">Vacancies</h1>

            <a href="/vacancies/create" class="button">Create a New Vacancy"</a>
        </div>
    </header>
    <main class = "flex flex-wrap -mx-3">
        @forelse ( $vacancies as $vacancy)
            <div class = "w-1/3 px-2.5 pb-6">
                <div class = "bg-white p-5 rounded shadow he">
                    <h3 class = "py-6 ">{{$vacancy->title}}</h3>
                    <div class = "text-grey">{{str_limit($vacancy->description, 150)}}</div>
                </div>
            </div>
        @empty
            <div>No vacancies yet.</div>

        @endforelse


    </main>
@endsection

