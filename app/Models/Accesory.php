<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    /** @use HasFactory<\Database\Factories\AccesorieFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "category"
    ];
}
