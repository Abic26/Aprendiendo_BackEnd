<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gato extends Model
{
    use HasFactory;
    protected $table = 'gatos';
    protected $primaryKey = 'id';
    protected $fillable =["nombre","edad"];

}
