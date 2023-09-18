<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckingMotor extends Model
{
    protected $table = "checking_motors";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $inrementing = true;
    public $timestamps = true;

    public function motor(): BelongsTo
    {
        return $this->belongsTo(Motor::class, "motor_funcloc", "funcloc");
    }
}
