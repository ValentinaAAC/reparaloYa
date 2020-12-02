<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroColab extends Model
{
    protected $table = 'users';
    protected $fillable = ['role','name','rut','email','password','telephone','idServicios','image'];
}
