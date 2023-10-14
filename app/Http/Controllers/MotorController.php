<?php

namespace App\Http\Controllers;

use App\Models\MasterDataMotor;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotorController extends Controller
{
    public function get(string $funcloc)
    {
        $motor = Motor::findOrFail($funcloc);

        return view("home", [
            "title" => "Motor",
            "motor" => $motor
        ]);
    }

    public function get_unique_id(string $unique_id)
    {
        $unique_id = MasterDataMotor::query()->where("unique_id", "=", $unique_id)->first();

        // return response()->json($unique_id, JSON_PRETTY_PRINT);
        return view("motor-data", [
            "title" => "Motor",
            "motor" => $unique_id
        ]);
    }

    public function search(Request $request)
    {
        $funclocExpected = $request->input("funcloc");

        $motor = Motor::find($funclocExpected);

        if ($motor != null) {
            return redirect("motor/$funclocExpected");
        }

        $motor = Motor::query()->where("field_name", "=", $funclocExpected)->first();

        if ($motor != null && strtoupper($funclocExpected) == $motor->field_name) {
            return redirect("motor/$motor->funcloc");
        }

        return abort(404);
    }
}
