<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <h1 class="fw-bold text-white text-center">COMICS</h1>
                <div class="col-12 d-flex flex-wrap">
                    @forelse ($comics as $comic)
                        <div class="col-3 p-4 d-flex justify-content-center m-5">
                            <div class="card">
                                <img src="{{ $comic->thumb }}" alt="">
                                <h5>{{ $comic->series }}</h5>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            Sorry no COMIC found!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>

</html>
