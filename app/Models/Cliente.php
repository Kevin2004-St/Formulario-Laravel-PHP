<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Campos autorizados para metodos create y update, asignación en masa
    protected $fillable = ["nombres", "apellidos", "email", "celular", "direccion", "fecha_nacimiento", "estado"];
}
