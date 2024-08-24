<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['user_id','estado','nombre','direccion','telefono','total','latitud','longitud'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
}
