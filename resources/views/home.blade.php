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
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">DATA MOTOR</h2>
        <table class="table h6">
            <tbody>
                @foreach (array_keys($motor) as $data)
                <tr>
                    <th style="padding-left: 0px;">{{ ucwords($data) }}</th>
                    <td>{{ $motor[$data] }}</td>
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
        <form action="/checking-motor" method="post">
            <div class="mb-3 row">
                <div class="col-sm">
                    <!-- <label for="clean_up" class="form-label">Kebersihan Motor</label> -->
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Cleanliness</option>
                        <option value="true">Clean</option>
                        <option value="false">Dirty</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Nipple Grease</option>
                        <option value="true">Exist</option>
                        <option value="false">Not Exist</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Vibration</option>
                        <option value="true">Allowed</option>
                        <option value="false">Not Allowed</option>
                    </select>
                    <div class="mt-3 mb-3">
                        <label for="greasing" class="form-label">Greasing</label>
                        <input type="number" class="form-control" id="greasing">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_a" class="form-label">Temperature A</label>
                        <input type="number" class="form-control" id="temperature_a">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_b" class="form-label">Temperature B</label>
                        <input type="number" class="form-control" id="temperature_b">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_c" class="form-label">Temperature C</label>
                        <input type="number" class="form-control" id="temperature_c">
                    </div>
                    <div class="mb-3">
                        <label for="temperature_d" class="form-label">Temperature D</label>
                        <input type="number" class="form-control" id="temperature_d">
                    </div>
                    <div class="mb-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>