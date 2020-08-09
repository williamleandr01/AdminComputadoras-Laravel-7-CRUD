<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    protected $table = 'computadora';
    protected $fillable = ['nombre_computadora'];
    protected $guarded = ['id_computadora'];
    public $timestamps = false;
}
