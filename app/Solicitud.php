<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'Solicitud';
    protected $fillable = ['direccion','idServicio','problema','imagen'];
}
