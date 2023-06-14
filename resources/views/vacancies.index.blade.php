<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vacancies</h1>

    <ul>
        @forelse ( $vacancies as $vacancy)
            <li>
                <a href="{{$vacancy->path()}}">{{$vacancy->title}}</a>
            </li>
        @empty
            <li>No vacancies yet.</li>

        @endforelse


    </ul>

</body>
</html>
