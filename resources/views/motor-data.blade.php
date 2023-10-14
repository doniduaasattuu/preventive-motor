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
            <a class="navbar-brand" href="/">Preventive Motor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Data Record</a>
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

    <div class="container">
        <h2 class="mb-4">DATA MOTOR</h2>
        <table class="table h6">
            <tbody>
                @foreach ($motor->toArray() as $key => $value)
                <tr>
                    <th style="padding-left: 0px;">{{ ucwords($key) }}</th>
                    <td>{{ $value }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <img class="img-fluid" src="/images/left-side.jpeg" alt="Left Side">
            </div>
            <div class="col-md">
                <img class="img-fluid" src="/images/front-side.jpeg" alt="Front Side">
            </div>
        </div>
    </div>


    <div class="container">
        <h2 class="mb-4">FORM CHECKING MOTOR</h2>
        @isset($error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endisset
        <form action="/" method="post">
            @csrf
            <div class="mb-3 row">
                <div class="col">
                    <select name="clean_up" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Cleanliness</option>
                        <option value="true">Clean</option>
                        <option value="false">Dirty</option>
                    </select>
                    <select name="nipple_grease" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Nipple Grease</option>
                        <option value="true">Exist</option>
                        <option value="false">Not Exist</option>
                    </select>
                    <select name="vibration" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Vibration</option>
                        <option value="true">Allowed</option>
                        <option value="false">Not Allowed</option>
                    </select>
                    <div class="mt-3 mb-3">
                        <label for="greasing" class="form-label">Greasing</label>
                        <input type="number" class="form-control" name="greasing" id="greasing">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_a" class="form-label">Temperature A</label>
                        <input type="number" class="form-control" name="temperature_a" id="temperature_a">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_b" class="form-label">Temperature B</label>
                        <input type="number" class="form-control" name="temperature_b" id="temperature_b">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_c" class="form-label">Temperature C</label>
                        <input type="number" class="form-control" name="temperature_c" id="temperature_c">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_d" class="form-label">Temperature D</label>
                        <input type="number" class="form-control" name="temperature_d" id="temperature_d">
                    </div>
                    <div class="mb-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>

    @include("footer")