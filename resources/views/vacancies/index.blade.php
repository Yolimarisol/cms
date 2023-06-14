@extends ('layouts.app')

@section('content')
    <div class= "display mb-3">
        <h1 class = "mautor">Vacancies</h1>

        <a href="/vacancies/create">Create a New Vacancy"</a>
    </div>
    <ul>
        @forelse ( $vacancies as $vacancy)
            <li>
                <a href="{{$vacancy->path()}}">{{$vacancy->title}}</a>
            </li>
        @empty
            <li>No vacancies yet.</li>

        @endforelse


    </ul>
@endsection

