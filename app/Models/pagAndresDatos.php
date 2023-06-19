<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagAndresDatos extends Model
{
    use HasFactory;
    protected $table = 'pag_andres_datos';
    protected $primaryKey = 'id';
    protected $fillable =["nombreE","numeroE"];
}

