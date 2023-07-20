<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <main>
            <div class="container d-flex flex-wrap justify-content-between py-5" style="gap: 1rem;">
                @foreach ($movies_data as $movie_data)
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $movie_data -> title }}
                            </h5>
                            <p class="card-text">
                                Nationality: {{ $movie_data -> nationality }}
                            </p>
                            <p class="card-text">
                                Date: {{ $movie_data -> date }}
                            </p>
                            <p class="card-text">
                                Vote: {{ $movie_data -> vote }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>

        @vite("resources/js/app.js")
    </body>
</html>
