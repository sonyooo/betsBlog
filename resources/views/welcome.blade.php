<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    @extends('layouts.app')
    @section('content')

        <figure>
            <blockquote class="blockquote text-center">
                <h2>Блог чем не блог</h2>
            </blockquote>
        </figure>
        <div class="d-flex justify-content-center">
            <div class=" col-md-8">
                <p>
                    Идейные соображения высшего порядка, а также социально-экономическое развитие влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Есть над чем задуматься: активно развивающиеся страны третьего мира, превозмогая сложившуюся непростую экономическую ситуацию, заблокированы в рамках своих собственных рациональных ограничений. Принимая во внимание показатели успешности, высокотехнологичная концепция общественного уклада обеспечивает актуальность экономической целесообразности принимаемых решений. Как принято считать, предприниматели в сети интернет объективно рассмотрены соответствующими инстанциями.
                </p>
            </div>
        </div>

        @auth

            <div class="d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="link-info" href="{{ route('blog.admin.posts.index') }}">
                                Посмотреть все статьи
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="link-info" href="{{ route('blog.admin.categories.index') }}">
                                Посмотреть все категории
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        @endauth
    @endsection





    </body>
</html>
