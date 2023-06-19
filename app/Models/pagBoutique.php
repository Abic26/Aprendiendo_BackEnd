<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagBoutique extends Model
{
    use HasFactory;
    protected $table = 'pag_boutiques';
    protected $primaryKey = 'id';
    protected $fillable = ["nombreI",'apellidoI','numDocu','textoI'];
}
