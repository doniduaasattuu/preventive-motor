<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CheckingMotor;
use App\Models\Motor;
use Illuminate\Http\Request;

class CheckingMotorController extends Controller
{
    public function input(Request $request, $funcloc)
    {
        $motor = Motor::query()->findOrFail($funcloc);

        foreach ($request->input() as $input) {
            if (empty($input)) {
                return view("home", [
                    "title" => "Motor",
                    "motor" => $motor,
                    "error" => "Data cannot be empty!, $input is required!"
                ]);
            }
        }

        CheckingMotor::create([
            "motor_funcloc" => $funcloc,
            "clean_up" => $request->boolean("clean_up"),
            "nipple_grease" => $request->boolean("nipple_grease"),
            "greasing" => $request->input("greasing"),
            "vibration" => $request->boolean("vibration"),
            "temperature_a" => $request->input("temperature_a"),
            "temperature_b" => $request->input("temperature_b"),
            "temperature_c" => $request->input("temperature_c"),
            "temperature_d" => $request->input("temperature_d"),
        ]);
    }

    public function data($funcloc)
    {
        $motor =  Motor::findOrFail($funcloc);
        $checkingMotors = $motor->checkingMotors;

        return view("checking-motor", [
            "title" => "Data Record",
            "motor" => $motor,
            "checkingMotors" => $checkingMotors
        ]);
    }
}
