<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Motor extends Model
{
    protected $table = "motors";
    protected $primaryKey = "funcloc";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;

    public function checkingMotors(): HasMany
    {
        return $this->hasMany(CheckingMotor::class, "motor_funcloc", "funcloc");
    }
}
