<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $primarykey = 'id';

    protected $fillable = ['rut', 'nombre', 'telefono', 'mail', 'direccion', 'ciudad'];

    public $timestamps = false;
}
