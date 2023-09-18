<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motor::create([
            "funcloc" => "FP-01-PM3-CUT-RWD1-FDR1",
            "electrical_panel" => "ELP000198",
            "electrical_motor" => "EMO003467",
            "field_name" => "FRONT DRUM",
            "description" => "MOTOR,AC,IDF-CHK11,TOSHIBA,225KW,400A,6P",
            "manufacture" => "TOSHIBA",
            "power" => "225",
            "voltage" => "690",
            "current" => "375",
            "pole" => "6",
        ]);

        Motor::create([
            "funcloc" => "FP-01-PM3-CUT-RWD1-RDR1",
            "electrical_panel" => "ELP000202",
            "electrical_motor" => "EMO003468",
            "field_name" => "REAR DRUM",
            "description" => "MOTOR,AC,IDF-CHK11,TOSHIBA,225KW,400A,6P",
            "manufacture" => "TOSHIBA",
            "power" => "225",
            "voltage" => "690",
            "current" => "375",
            "pole" => "6",
        ]);
    }
}
