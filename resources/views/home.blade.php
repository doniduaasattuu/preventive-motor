@include("nav")

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
    <form action="/checking-motor/{{ $motor->toArray()['funcloc'] }}" method="post">
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