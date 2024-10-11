<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaModel extends Model
{
    use HasFactory;
    protected $table = 'sala'; // Especifica el nombre de la tabla
    protected $fillable = [
        'titulo',
        'img_sala',
        'costo',
        'estatus',
        'id_tipo',

    ];
    public function tipoSala()
    {
        return $this->belongsTo(TipoSalaModel::class);
    }
}
