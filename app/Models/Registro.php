<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'curp', 'fecha_nacimiento', 'empresa_trabajo', 'antiguedad','rama_empresa', 'banco_nomina',
     'telefono_contac', 'email', 'contrasena', 'ine_frente','ine_reverso', 'comp_dom', 'foto_cine'];
}
