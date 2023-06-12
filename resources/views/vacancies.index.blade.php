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
        @foreach ($vacancies as $vacancy)
        <li>{{$vacancy->title}}</li>

        @endforeach
    </ul>

</body>
</html>
