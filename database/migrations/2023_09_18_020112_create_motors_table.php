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
        Schema::create('motors', function (Blueprint $table) {
            $table->string("funcloc", 100)->nullable(false)->primary();
            $table->string("electrical_panel", 15)->nullable();
            $table->string("electrical_motor", 15)->nullable();
            $table->string("field_name", 100)->nullable();
            $table->text("description")->nullable();
            $table->string("manufacture", 100)->nullable();
            $table->char("power", 5)->nullable();
            $table->char("voltage", 5)->nullable();
            $table->char("current", 5)->nullable();
            $table->char("pole", 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};
