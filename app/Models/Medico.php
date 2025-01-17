<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cui',
        'especialidad',
        'telefono',
        'correo',
    ];

    public function realizarExamenes()
    {
        return $this->hasMany(RealizarExamen::class);
    }
}