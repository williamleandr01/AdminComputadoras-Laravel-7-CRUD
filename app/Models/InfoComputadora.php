<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class InfoComputadora extends Model
{
    protected $table = 'info_computadora';
    protected $fillable = ['id_computadora', 'descrip_compu'];
    protected $guarded = ['id_info_compu', 'id_computadora'];
    public $timestamps = false;
}
