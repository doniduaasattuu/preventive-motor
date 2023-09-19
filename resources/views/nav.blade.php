<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
</head>
<style>
    td {
        font-weight: 400;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 0px rgba(200, 200, 200, 1);
        border-radius: 0px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 0px;
        background-color: #fff;
        -webkit-box-shadow: inset 0 0 0px rgba(90, 90, 90, 0.7);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="/motor/{{ $motor->toArray()['funcloc'] }}">Preventive Motor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/checking-motor/{{ $motor->toArray()['funcloc'] }}">Data Record</a>
                    </li>
                </ul>
                <form class="d-flex" method="post" action="/motor" role="search">
                    @csrf
                    <input class="form-control me-2" name="funcloc" id="funcloc" type="search" placeholder="Funcloc / Field name" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>