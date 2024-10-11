<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoModel extends Model
{
    use HasFactory;
    protected $table = 'permiso'; // Especifica el nombre de la tabla
    protected $fillable = [
        'descripcion_permiso',
    ];
}
