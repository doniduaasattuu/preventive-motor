@include("nav")

<div>
    <h2 class="mb-4">RECORD DATA MOTOR</h2>
    <table class="table">
        <thead>
            <tr>
                @foreach (array_keys($checkingMotors[0]->toArray()) as $key)
                <th scope="col">{{ ucwords($key) }}</th>
                @endforeach
                <!-- <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($checkingMotors as $data)
            <tr>
                @foreach ($data->toArray() as $key => $value)
                <td>{{$value}}</td>
                @endforeach
            </tr>
            @endforeach

            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr> -->
        </tbody>
    </table>
</div>

@include("footer")