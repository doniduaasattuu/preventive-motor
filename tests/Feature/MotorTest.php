<?php

namespace Tests\Feature;

use App\Models\CheckingMotor;
use App\Models\Motor;
use DateTime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class MotorTest extends TestCase
{
    public function testGetData()
    {
        $this->get("/motor/FP-01-PM3-CUT-RWD1-FDR1")
            ->assertSeeText("Motor");
    }

    public function testGetDataChecking()
    {
        $motor = Motor::query()->find("FP-01-PM3-CUT-RWD1-FDR1");
        self::assertNotNull($motor);

        $data_checking = $motor->checkingMotors;

        self::assertCount(31, $data_checking);

        foreach ($data_checking as $data) {
            Log::info(json_encode($data, JSON_PRETTY_PRINT));
        };
    }

    public function testDateTime()
    {
        // $date = strtotime("+1 day", strtotime("2007-02-28"));
        // echo date("Y-m-d", $date);

        $dateraw = new DateTime("-1 month");
        $datetime = $dateraw->format("Y-m-d h:i:s");

        $date = new DateTime($datetime);
        $date->modify('+1 day');
        echo $date->format('Y-m-d H:i:s');

        $date->modify('+1 day');
        echo $date->format('Y-m-d H:i:s');

        self::assertNotNull($date);
    }

    public function testMotor()
    {
        $motor = Motor::findOrFail("FP-01-PM3-CUT-RWD1-FDR1");
        self::assertNotNull($motor);
        Log::info(json_encode($motor->field_name));

        // $arrayMotor = $motor->toArray();
        // self::assertNotNull($arrayMotor);

        // Log::info($arrayMotor);

        // foreach ($arrayMotor as $data) {
        //     Log::info($data);
        // }

        // $keys = array_keys($arrayMotor);
        // foreach ($keys as $dataKey) {
        //     Log::info($dataKey);
        // }

        // $motor->each(function ($data) {
        //     Log::info(json_encode($data, JSON_PRETTY_PRINT));
        //     self::assertNotNull($data);
        // });
    }

    public function testChecking()
    {
        $motor =  Motor::find("FP-01-PM3-CUT-RWD1-FDR1");
        $checkingMotor = $motor->checkingMotors;

        foreach ($checkingMotor as $check) {
            Log::info(json_encode($check));
        }
    }

    public function testDataBase()
    {
        $motor = DB::table('motors')->select("*")->where("funcloc", "=", "FP-01-PM3-CUT-RWD1-FDR1")->first();
        self::assertNotNull($motor);
        Log::info(json_encode($motor));

        collect($motor)->each(function ($value, $key) {
            Log::info($key . " = " . $value);
        });
    }

    public function testFieldName()
    {
        $field_name = Motor::query()->where("field_name", "=", "REAR DRUM")->first();
        self::assertNotNull($field_name);
        Log::info(json_encode($field_name, JSON_PRETTY_PRINT));
        Log::info(json_encode($field_name->field_name));
        Log::info(json_encode($field_name->funcloc));
    }

    public function testNotFound()
    {
        $notfound = Motor::find("REAR DRUM");
        self::assertNull($notfound);
    }
}
