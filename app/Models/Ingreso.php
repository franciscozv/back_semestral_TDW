<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;


    public function bebidas()
{
    return $this->belongsToMany(Bebida::class, 'ingreso_bebida')->withPivot('cantidad');
}
public function ingresos()
{
    return $this->belongsToMany(Ingreso::class, 'ingreso_bebida')->withPivot('cantidad');
}

}
