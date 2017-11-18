<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = ['nombre' , 'apellidos' , 'emailempleado' , 'telefono' , 'salario' , 'departamento' ];

}
