<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="mt-5">
        <h1 class="text-danger text-center">Movies</h1>
    </div>
    <div class="d-flex flex-wrap p-5 text-center">
        @foreach($movies as $movie)
        <div class="col-3">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$movie->title}}
                    </h4>
                    <h5 class="card-subtitle mb-2 text-body-secondary">
                        {{$movie->original_title}}
                    </h5>
                    <p class="card-text">
                        {{$movie->nationality}}
                    </p>
                    <h6>
                        {{$movie->vote}}
                    </h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</body>

</html>