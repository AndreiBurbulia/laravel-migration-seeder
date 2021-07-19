<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>
    <h1>homepage</h1>

    <div class="content">
        @foreach ($vacations as $vacation)
            <img src="{{ $vacation->image_url }}" alt="">
            <h2>{{ $vacation->country }}</h2>
            <h3>{{ $vacation->city }}</h3>
            <p>{{ $vacation->description }}</p>
        @endforeach

    </div>

</body>

</html>
