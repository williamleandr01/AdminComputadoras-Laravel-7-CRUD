<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ImgComputadora extends Model
{
    protected $table = 'img_computadora';
    protected $fillable = ['id_computadora', 'img_compu'];
    protected $guarded = ['id_img_compu', 'id_computadora'];
    public $timestamps = false;
}
