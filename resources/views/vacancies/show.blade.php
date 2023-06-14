@extends ('layouts.app')

@section('content')

    <h1>{{$vacancy->title}}</h1>
    <div>{{$vacancy->description}}</div>
    <div>{{$vacancy->responsibilities}}</div>
    <div>{{$vacancy->requirements}}</div>
    <div>{{$vacancy->address}}</div>
    <a href="/vacancies">Go back</a>
@endsection

