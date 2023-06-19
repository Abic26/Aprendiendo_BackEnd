<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiendaRopa extends Model
{
    use HasFactory;
    protected $table = 'tienda_ropas';
    protected $primaryKey = 'id';
    protected $fillable =["nombreCliente","producto","precio"];



}
