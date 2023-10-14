<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_data_motors', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->string("EMO", 9)->nullable(false);
            $table->enum("status", ["Installed", "Repair", "Available"])->nullable(true);
            $table->string("functional_location", 150)->nullable(true);
            $table->integer("unique_id")->nullable(true);
            $table->string("qr_code_link", 150)->nullable(true);
            $table->string("sort_field", 150)->nullable(true);
            $table->string("serial_number", 150)->nullable(true);
            $table->string("manufacture", 150)->nullable(true);
            $table->string("type", 150)->nullable(true);
            $table->string("power_rate", 10)->nullable(true);
            $table->smallInteger("voltage")->nullable(true);
            $table->smallInteger("current_nominal")->nullable(true);
            $table->enum("pole", [2, 4, 6, 8, 10, 12, 14])->nullable(true);
            $table->smallInteger("RPM")->nullable(true);
            $table->string("bearing_de", 10)->nullable(true);
            $table->string("Bearing_nde", 10)->nullable(true);
            $table->string("frame_type", 10)->nullable(true);
            $table->smallInteger("shaft_diameter")->nullable(true);
            $table->string("material_number", 10)->nullable(true);
            $table->string("equipment_description", 150)->nullable(true);
            $table->smallInteger("supply_phases")->nullable(true);
            $table->float("Cos_Ø", 2)->nullable(true);
            $table->float("efficiency", 2)->nullable(true);
            $table->smallInteger("IP")->nullable(true);
            $table->string("insulation_class", 10)->nullable(true);
            $table->string("duty", 10)->nullable(true);
            $table->string("connection_type", 50)->nullable(true);
            $table->enum("nipple_grease", ["Available", "Not Available"])->nullable(true);
            $table->string("greasing_type")->nullable(true);
            $table->string("greasing_qty_de", 10)->nullable(true);
            $table->string("greasing_qty_nde", 10)->nullable(true);
            $table->smallInteger("length")->nullable(true);
            $table->smallInteger("width")->nullable(true);
            $table->smallInteger("height")->nullable(true);
            $table->enum("cooling_fan", ["Internal", "External", "Not Available"])->nullable(true);
            $table->enum("mounting", ["Horizontal", "Vertical", "MGM", "V/H"])->nullable(true);
            $table->enum("frequency", ["50", "60"])->nullable(true);
            $table->timestamps();

            $table->unique("EMO", "emo_unique");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_data_motors');
    }
};
