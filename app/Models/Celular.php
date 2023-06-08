<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;
    protected $table = "celulars";
    protected $primarykey = "id";
    protected $fillable = ["marca","costo",];
}
