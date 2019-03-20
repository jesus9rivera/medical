<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    public $timestamps = false;
    protected $fillable = ['usuario','contraseña','tipo','privilegios_id'];
}
