<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PrecioComputadora extends Model
{
    protected $table = 'precio_computadora';
    protected $fillable = ['id_computadora', 'precio_compu'];
    protected $guarded = ['id_precio_compu', 'id_computadora'];
    public $timestamps = false;
}
