<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = "motors";
    protected $primaryKey = "funcloc";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;
}
