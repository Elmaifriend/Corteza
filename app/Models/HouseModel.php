<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseModel extends Model
{
    /** @use HasFactory<\Database\Factories\ModelFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "estandar",
        "plus",
        "delux"
    ];
}
