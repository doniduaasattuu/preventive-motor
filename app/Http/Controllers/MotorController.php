<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function get(string $funcloc)
    {
        $motor = Motor::query()->findOrFail($funcloc);

        return view("home", [
            "title" => "Motor",
            "motor" => $motor
        ]);
    }
}
