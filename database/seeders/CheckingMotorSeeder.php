<?php

namespace Database\Seeders;

use App\Models\CheckingMotor;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CheckingMotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oneMonthAgo = new DateTime("-1 month");
        $datetime = $oneMonthAgo->format("Y-m-d h:i:s");

        $date = new DateTime($datetime);

        for ($i = 0; $i <= 30; $i++) {
            $datePrint = $date->modify('+1 day');

            CheckingMotor::create([
                "motor_funcloc" => "FP-01-PM3-CUT-RWD1-RDR1",
                "clean_up" => true,
                "nipple_grease" => true,
                "greasing" => rand(20, 100),
                "vibration" => false,
                "temperature_a" => rand(55, 95),
                "temperature_b" => rand(55, 95),
                "temperature_c" => rand(55, 95),
                "temperature_d" => rand(55, 95),
                "created_at" => $datePrint,
                "updated_at" => $datePrint,
            ]);

            CheckingMotor::create([
                "motor_funcloc" => "FP-01-PM3-CUT-RWD1-FDR1",
                "clean_up" => true,
                "nipple_grease" => true,
                "greasing" => rand(20, 100),
                "vibration" => false,
                "temperature_a" => rand(55, 95),
                "temperature_b" => rand(55, 95),
                "temperature_c" => rand(55, 95),
                "temperature_d" => rand(55, 95),
                "created_at" => $datePrint,
                "updated_at" => $datePrint,
            ]);
        }
    }
}
