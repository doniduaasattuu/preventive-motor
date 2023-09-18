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
        Schema::create('checking_motors', function (Blueprint $table) {
            $table->id();
            $table->string("motor_funcloc", 100)->nullable(false);
            $table->boolean("clean_up")->nullable(false);
            $table->boolean("nipple_grease")->nullable(false);
            $table->smallInteger("greasing")->nullable(false)->default(0);
            $table->boolean("vibration")->nullable(false);
            $table->char("temperature_a", 5)->nullable(false);
            $table->char("temperature_b", 5)->nullable(false);
            $table->char("temperature_c", 5)->nullable(false);
            $table->char("temperature_d", 5)->nullable(false);
            $table->timestamp("created_at")->nullable(false)->useCurrent();
            $table->timestamp("updated_at")->nullable(false)->useCurrent();
            $table->foreign("motor_funcloc")->on("motors")->references("funcloc");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checking_motors');
    }
};
