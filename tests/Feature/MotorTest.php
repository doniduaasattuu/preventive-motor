<?php

namespace Tests\Feature;

use App\Models\Motor;
use DateTime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
    }
}