@extends ('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class ="flex justify-between w-full items-center">


            <a href="/vacancies/create" class="button">Create a New Vacancy"</a>
        </div>
    </header>
    <main>
        <div>
            <h2 class = "mautor">Details</h2>
        </div>
        <div></div>
    </main>

    <h1>{{$vacancy->title}}</h1>
    <div>{{$vacancy->description}}</div>
    <div>{{$vacancy->responsibilities}}</div>
    <div>{{$vacancy->requirements}}</div>
    <div>{{$vacancy->address}}</div>
    <a href="/vacancies" class="text-grey no-underline" >Go back</a>
@endsection

