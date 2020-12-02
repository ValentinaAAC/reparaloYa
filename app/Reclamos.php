<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamos extends Model
{
    protected $table = 'reclamos';
    protected $fillable = ['descripcion','user_id'];
}
