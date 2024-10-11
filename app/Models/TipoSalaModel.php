<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSalaModel extends Model
{
    protected $table = 'tipo_sala'; // Especifica el nombre de la tabla
    use HasFactory;
    protected $fillable = [
        'descripcion_tipo',
    ];
}
