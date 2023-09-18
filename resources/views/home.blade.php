<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
    }

    .container {
        width: 80%;
    }
</style>

<body>
    <!-- <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Funcloc</th>
                    <th scope="col">Electrical_panel</th>
                    <th scope="col">Electrical_motor</th>
                    <th scope="col">Field_name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Manufacture</th>
                    <th scope="col">Power</th>
                    <th scope="col">Voltage</th>
                    <th scope="col">Current</th>
                    <th scope="col">Pole</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">{{ $motor->funcloc }}</td>
                    <td scope="col">{{ $motor->electrical_panel }}</td>
                    <td scope="col">{{ $motor->electrical_motor }}</td>
                    <td scope="col">{{ $motor->field_name }}</td>
                    <td scope="col">{{ $motor->description }}</td>
                    <td scope="col">{{ $motor->manufacture }}</td>
                    <td scope="col">{{ $motor->power }}</td>
                    <td scope="col">{{ $motor->voltage }}</td>
                    <td scope="col">{{ $motor->current }}</td>
                    <td scope="col">{{ $motor->pole }}</td>
                </tr>
            </tbody>
        </table>
    </div> -->
</body>

</html>